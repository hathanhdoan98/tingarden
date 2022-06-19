<?php

namespace App\Services;

use App\Http\Responses\CreateOrderResponse;
use App\Services\CustomerService;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use Carbon\Carbon;
use Illuminate\Support\Str;

class OrderService
{
    private $orderRepository;
    private $orderDetailRepository;
    private $customerService;
    private $productService;
    private $cartService;
    /**
     * @param OrderRepository $orderRepository
     * @param OrderDetailRepository $orderDetailRepository
     * @param CustomerService $customerService
     * @param ProductService $productService
     * @param CartService $cartService
     * @return void
     */
    public function __construct(
        OrderRepository $orderRepository,
        OrderDetailRepository $orderDetailRepository,
        CustomerService $customerService,
        ProductService $productService,
        CartService $cartService
    ) {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->customerService = $customerService;
        $this->productService = $productService;
        $this->cartService = $cartService;
    }

    /**
     * Create new order
     * @param array $data
     * @return CreateOrderResponse
     */
    public function createOrder(array $data): CreateOrderResponse
    {
        $shippingFee = $totalPrice = $discountPrice = $subTotalPrice = $paymentTotalPrice = 0;
        $orderDetails = [];

        $customer = $this->customerService->createCustomer($data['customer']);
        $products = collect($data['products'])->keyBy('id');
        $productList = $this->productService->getProductById(
            array_column($data['products'], 'id')
        )->toArray();
        if (!$productList) {
            return new CreateOrderResponse(config('order.response_code.out_of_product'));
        }
        foreach ($productList as $product) {
            $id = $product['id'];
            $subTotalPrice += $product['sale_off_price'] * $products[$id]['quantity'];

            $orderDetails[] = [
                'product_id' => $id,
                'quantity' => $products[$id]['quantity'],
                'price' => $product['sale_off_price'],
                'status' => config('common.status.active'),
                'created_at' => Carbon::now()->toDateString(),
                'updated_at' => Carbon::now()->toDateString()
            ];
        }
         $orderData = [
            'customer_id' => $customer['id'],
            'promotion_id' => $data['promotion_id'] ?? null,
            'user_id' => $data['user_id'] ?? null,
            'code' => 'HD-'.Str::random(6),
            'note' => $data['note'] ?? null,
            'shipping_fee' => $shippingFee,
            'total_price' => $subTotalPrice + $shippingFee,
            'sub_total_price' => $subTotalPrice,
            'discount_price' => $discountPrice,
            'payment_total_price' => ($subTotalPrice + $shippingFee) - $discountPrice,
            'status' => config('order.status.new')
        ];
        $order = $this->orderRepository->save($orderData);

        foreach ($orderDetails as $index=>$orderDetail) {
            $orderDetails[$index]['order_id'] = $order['id'];
        }
        $this->orderDetailRepository->insertMany($orderDetails);
        $this->cartService->destroyCart();
        return new CreateOrderResponse(config('order.response_code.success'), '', ['code'=>$order['code']]);
    }
}
