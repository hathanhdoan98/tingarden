<?php

namespace App\Http\Controllers\Admin\PaymentMethod;

use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\PaymentMethod\CreatePaymentMethodRequest;
use App\Models\Alias;
use App\Models\PaymentMethod;
use App\Http\Controllers\Controller;
use App\Models\MetaSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PaymentMethodController extends Controller
{
    use Lib;
    public function index()
    {
        return view('Admin.PaymentMethod.index');
    }

    public function getList(Request $request)
    {

        $data = $request->all();
        $limit = isset($data['limit']) ? (int)$data['limit'] : 10;
        $limit = ($limit > 200) ? 200 : $limit;
        $payment_methods = new PaymentMethod();
        $status = 'active';
        $sort_key = 'create_at';
        $sort_value = 'DESC';

        if (isset($data['filter'])) {
            $filter = is_array($data['filter']) ? $data['filter'] : json_decode($data['filter'], true);
            if (!empty($filter['status'])) {
                $status = $filter['status'];
            }
            if (!empty($filter['keyword'])) {
                $payment_methods = $payment_methods->where('search', 'like', '%' . Str::slug($filter['keyword'], ' ') . '%');
            }

            if (!empty($filter['sort'])) {
                $sort_value = $filter['sort'];
            }

            if (!empty($filter['sort_key'])) {
                $sort_key = $filter['sort_key'];
            }
        }
        $payment_methods = $payment_methods->where('status', $status)->orderBy($sort_key, $sort_value);
        if($limit == -1){
            $payment_methods = $payment_methods->get();
        }else{
            $payment_methods = $payment_methods->paginate($limit);
        }

        return $this->setResponse(['data'=>$payment_methods]);
    }

    public function getById(Request $request)
    {
        if(empty($request->id)){
            return $this->setResponse([
                'success'=>false,
                'message'=>'Vui lòng chọn phương thức'
                ]
            );
        }
        $payment_method = PaymentMethod::where('id',$request->id)->first();

        return $this->setResponse([
              'data' => $payment_method
           ]
        );

    }

    public function create(CreatePaymentMethodRequest $request)
    {
        try {
            $data = [];
            $data = $request->except(['image']);
            $data['create_at'] = $data['update_at'] = time();
            $data['status'] = 'active';
            $data['search'] = Str::slug($data['name'], ' ');
            if (isset($request->image) && !is_string($request->image) && $request->image != 'undefined') {
                $rs_upload = uploadFile(["file" => $request->image, "path" => "upload/images/payment-method"]);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image'] = $rs_upload['data']['path'];
            }

            $payment_method = PaymentMethod::create($data);
            if ($payment_method) {
                return $this->setResponse([
                       'data' => $payment_method,
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
        $data = $request->except(['image']);
        if(empty($data['id'])){
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Vui lòng chọn phương thức',
               ]
            );
        }

        $data['update_at'] = time();
        if(!empty($data['name'])){
            $data['search'] = Str::slug($data['name'],' ');
        }
        $payment_method = PaymentMethod::find($data['id']);
        if (!$payment_method) {
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Không tìm thấy phương thức',
               ]
            );
        }
        $data['index'] = isset($data['index']) ? $data['index'] : $payment_method['index'];
        if (!empty($data['status']) && $payment_method->status != $data['status']) {
            $payment_method->update(['status' => $data['status']]);
            return $this->setResponse([
                   'data' => $payment_method,
                   'message' => 'Đã thay đổi trạng thái',
               ]
            );
        }

        if (!empty($request->image) &&  !is_string($request->image) && $request->image != 'undefined') {
            $rs_upload = uploadFile(["file" => $request->image, "path" => "upload/images/payment-method"]);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image'] = $rs_upload['data']['path'];

            if (!empty($payment_method['image'])) {
                removeFile(["path" => $payment_method['image']]);
            }
        }

        $payment_method->update($data);

        return $this->setResponse([
               'data' => $payment_method,
               'message' => 'Cập nhật thành công',
           ]
        );
    }
}
