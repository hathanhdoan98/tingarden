<?php
namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Order\CreateOrderRequest;
use App\Services\OrderService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller {
    use Lib;

    private $orderService;

    public function __construct(OrderService $orderService){
        $this->orderService = $orderService;
    }

    public function createOrder(CreateOrderRequest $request){
       try{
        return DB::transaction(function () use ($request) {
            $result = $this->orderService->createOrder($request->all());
            if($result->isSuccess()){
                return $this->responseOK($result->getData(), $result->getMessage());
            }
            return $this->responseError(Response::HTTP_BAD_REQUEST, null, $result->getMessage());

        });
       }catch(\Exception $e){
           return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e, 'Xảy ra lỗi. Vui lòng thử lại');
       }
    }
}
