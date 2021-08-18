<?php

namespace App\Http\Controllers\Admin\Promotion;

use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Promotion\CreatePromotionRequest;
use App\Models\Alias;
use App\Models\Promotion;
use App\Http\Controllers\Controller;
use App\Models\MetaSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    use Lib;
    public function index()
    {
        return view('Admin.Promotion.index');
    }

    public function getList(Request $request)
    {
        $data = $request->all();
        $limit = isset($data['limit']) ? (int)$data['limit'] : 10;
        $limit = ($limit > 200) ? 200 : $limit;
        $promotions = new Promotion();
        $status = 'active';
        $sort_key = 'create_at';
        $sort_value = 'DESC';

        if (isset($data['filter'])) {
            $filter = is_array($data['filter']) ? $data['filter'] : json_decode($data['filter'], true);
            if (!empty($filter['status'])) {
                $status = $filter['status'];
            }
            if (!empty($filter['keyword'])) {
                $promotions = $promotions->where(function ($q) use ($filter){
                    $q->where('search', 'like', '%' . Str::slug($filter['keyword'],' ') . '%')
                        ->orWhere('code', 'like', '%' . Str::slug($filter['keyword'],' ') . '%');
                });
            }

            if (!empty($filter['sort'])) {
                $sort_value = $filter['sort'];
            }

            if (!empty($filter['sort_key'])) {
                $sort_key = $filter['sort_key'];
            }
        }
        $promotions = $promotions->where('status', $status)->orderBy($sort_key, $sort_value);
        if($limit == -1){
            $promotions = $promotions->get();
        }else{
            $promotions = $promotions->paginate($limit);
        }

        return $this->setResponse(['data'=>$promotions]);
    }

    public function getById(Request $request)
    {
        if(empty($request->id)){
            return $this->setResponse([
                'success'=>false,
                'message'=>'Vui lòng chọn voucher'
                ]
            );
        }
        $promotion = Promotion::where('id',$request->id)->first();

        return $this->setResponse([
              'data' => $promotion
           ]
        );
    }

    public function create(CreatePromotionRequest $request)
    {
        try {
            $data = [];
            $data = $request->all();
            $data['create_at'] = $data['update_at'] = time();
            $data['status'] = 'active';
            if(!empty($data['name'])){
                $data['search'] = Str::slug($data['name'], ' ');
            }
            if(!empty($data['begin']) && !empty($data['end']) && $data['begin'] > $data['end']){
                return $this->setResponse([
                       'success' => false,
                       'message' => 'Ngày bắt đầu phải bé hơn ngày kết thúc',
                   ]
                );
            }

            $check = Promotion::where('code', $data['code'])->first();
            if($check){
                return $this->setResponse([
                        'success' => false,
                        'message' => 'Mã khuyến mãi bị trùng. Vui lòng chọn mã khác',
                    ]
                );
            }

            $promotion = Promotion::create($data);
            if ($promotion) {
                return $this->setResponse([
                       'data' => $promotion,
                       'message' => 'Tạo thành công',
                   ]
                );
            }
            return $this->setResponse([
                    'success' => false,
                    'message' => 'Xảy ra lỗi',
                ]
            );
        }catch (\Exception $e){
            return $this->setResponse([
                   'success' => false,
                   'message' => $e->getMessage(),
               ]
            );
        }

    }

    public function update(Request $request)
    {
        $data = $request->all();
        if(empty($data['id'])){
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Vui lòng chọn voucher',
               ]
            );
        }

        $data['update_at'] = time();
        if(!empty($data['name'])){
            $data['search'] = Str::slug($data['name'],' ');
        }
        $promotion = Promotion::find($data['id']);
        if (!$promotion) {
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Không tìm thấy voucher',
               ]
            );
        }
        if (!empty($data['status']) && $promotion->status != $data['status']) {
            $promotion->update(['status' => $data['status']]);
            return $this->setResponse([
                   'data' => $promotion,
                   'message' => 'Đã thay đổi trạng thái',
               ]
            );
        }

        if(!empty($data['code'])){
            $check = Promotion::where('code', $data['code'])->where('id','<>', $promotion['id'])->first();
            if($check){
                return $this->setResponse([
                       'success' => false,
                       'message' => 'Mã khuyến mãi bị trùng',
                   ]
                );
            }
        }
        if(!empty($data['begin']) && !empty($data['end']) && $data['begin'] > $data['end']){
            return $this->setResponse([
                    'success' => false,
                    'message' => 'Ngày bắt đầu phải bé hơn ngày kết thúc',
                ]
            );
        }

        $promotion->update($data);

        return $this->setResponse([
               'data' => $promotion,
               'message' => 'Cập nhật thành công',
           ]
        );
    }
}
