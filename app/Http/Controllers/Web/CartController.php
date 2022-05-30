<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Cart\AddToCartRequest;
use App\Http\Requests\Cart\RemoveCartRequest;
use App\Http\Requests\Cart\UpdateCartRequest;
use App\Services\CartService;
use Illuminate\Http\Response;

class CartController extends Controller
{
    use Lib;

    /**
     * @var CartService
     */
    protected $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function addToCart(AddToCartRequest $request)
    {
        try {
            return $this->responseOK([
                'total_quantity' => $this->cartService->addToCart($request->product_id, $request->quantity)
            ]);
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }

    public function getCarts()
    {
        try {
            return $this->responseOK([
                'carts' => $this->cartService->getCarts()
            ]);
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }

    public function updateCart(UpdateCartRequest $request)
    {
        try {
            return $this->responseOK([
                'total_quantity' => $this->cartService->updateCart($request->product_id, $request->quantity)
            ]);
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }

    public function removeCart(RemoveCartRequest $request)
    {
        try {
            return $this->responseOK([
                'total_quantity' => $this->cartService->removeCart($request->product_id)
            ]);
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }
}
