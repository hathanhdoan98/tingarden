<?php

namespace App\Http\Controllers\Admin\Customer;

use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Customer\CreateCustomerRequest;
use App\Models\Alias;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use App\Models\MetaSeo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    use Lib;
    public function index()
    {
        return view('Admin.Customer.index');
    }

    public function getList(Request $request)
    {

        $data = $request->all();
        $limit = isset($data['limit']) ? (int)$data['limit'] : 10;
        $limit = ($limit > 200) ? 200 : $limit;
        $customers = new Customer();
        $status = 'active';
        $sort_key = 'create_at';
        $sort_value = 'DESC';

        if (isset($data['filter'])) {
            $filter = is_array($data['filter']) ? $data['filter'] : json_decode($data['filter'], true);
            if (!empty($filter['status'])) {
                $status = $filter['status'];
            }
            if (!empty($filter['keyword'])) {
                $customers = $customers->where(function ($q) use ($filter){
                    $q->where('search', 'like', '%' . Str::slug($filter['keyword'],' ') . '%')
                        ->orWhere('phone', 'like', '%' . Str::slug($filter['keyword'],' ') . '%');
                });
            }

            if (!empty($filter['sort'])) {
                $sort_value = $filter['sort'];
            }

            if (!empty($filter['sort_key'])) {
                $sort_key = $filter['sort_key'];
            }
        }
        $customers = $customers->where('status', $status)->orderBy($sort_key, $sort_value);
        if($limit == -1){
            $customers = $customers->get();
        }else{
            $customers = $customers->paginate($limit);
        }

        return $this->setResponse(['data'=>$customers]);
    }

    public function getById(Request $request)
    {
        if(empty($request->id)){
            return $this->setResponse([
                'success'=>false,
                'message'=>'Vui lòng chọn khách hàng'
                ]
            );
        }
        $customer = Customer::where('id',$request->id)->first();

        return $this->setResponse([
              'data' => $customer
           ]
        );

    }

    public function create(CreateCustomerRequest $request)
    {
        try {
            $data = [];
            $data = $request->except(['image']);
            $data['create_at'] = $data['update_at'] = time();
            $data['status'] = 'active';
            $data['search'] = Str::slug($data['name'], ' ');

            $customer = Customer::create($data);
            if ($customer) {
                return $this->setResponse([
                       'data' => $customer,
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
                   'message' => 'Vui lòng chọn khách hàng',
               ]
            );
        }

        $data['update_at'] = time();
        if(!empty($data['name'])){
            $data['search'] = Str::slug($data['name'],' ');
        }
        $customer = Customer::find($data['id']);
        if (!$customer) {
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Không tìm thấy khách hàng',
               ]
            );
        }
        if (!empty($data['status']) && $customer->status != $data['status']) {
            $customer->update(['status' => $data['status']]);
            return $this->setResponse([
                   'data' => $customer,
                   'message' => 'Đã thay đổi trạng thái',
               ]
            );
        }

        $customer->update($data);

        return $this->setResponse([
               'data' => $customer,
               'message' => 'Cập nhật thành công',
           ]
        );
    }
}
