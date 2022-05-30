<?php

namespace App\Services;

class CartService
{

    /**
     * @var ProductService $productService
     */
    protected $productService;

    /**
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * @param int $productId,
     * @param int $quantity
     * @return int
     */
    public function addToCart(int $productId, int $quantity): int
    {
        $carts = \request()->session()->get('carts', []);

        if (isset($carts[$productId])) {
            $carts[$productId] += $quantity;
        } else {
            $carts[$productId] = $quantity;
        }
        \request()->session()->put('carts', $carts);
        return array_sum($carts);
    }

    /**
     * @return null|array
     */
    public function getCarts(): ?array
    {
        $carts = \request()->session()->get('carts', []);
        if($carts){
            $products = $this->productService->getProductById(array_keys($carts))->toArray();
            if($products){
                foreach($products as $product){
                    $result[] = [
                        'id' => $product['id'],
                        'product_name' => $product['name'] ?? '',
                        'price' => $product['sale_off_price'] ?? 0,
                        'image' => $product['images'][0]['path'] ?? '',
                        'alias' => $product['alias']['alias'] ?? '',
                        'quantity' => $carts[$product['id']],
                        'sub_price' => $carts[$product['id']] * $product['sale_off_price'],
                    ];
                }
            }
        }

        return $result ?? [];
    }

    /**
     * @param int $productId,
     * @param int $quantity
     * @return int
     */
    public function updateCart(int $productId, int $quantity): int
    {
        $carts = \request()->session()->get('carts', []);
        $carts[$productId] = $quantity;
        \request()->session()->put('carts', $carts);
        return array_sum($carts);
    }

    /**
     * @param int $productId,
     * @return int
     */
    public function removeCart(int $productId): int
    {
        $carts = \request()->session()->get('carts', []);
        if(isset($carts[$productId])){
            unset($carts[$productId]);
        }
        \request()->session()->put('carts', $carts);
        return array_sum($carts);
    }
}
