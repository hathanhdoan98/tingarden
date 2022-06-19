<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Http\Resources\ProductResource;
use App\Http\Responses\PaginationResponse;
use App\Services\ProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ListingController extends Controller
{
    use Lib;

    /**
     * @var ProductService
     */
    protected $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function getProducts(Request $request)
    {
        try {
            $categoryId = $request->input('category_id');
            $sortKey = $request->input('sort_key', config('pagination.sort_default.key'));
            $sortValue = $request->input('sort_value', config('pagination.sort_default.value'));
            $limit = $request->input('limit', 20);
            $page = $request->input('page', 1);

            $productList = $this->productService->paginateAll(
                $page,
                $limit,
                [
                    'category_id' => $categoryId,
                    'status' => config('common.status.active')
                ],
                $sortKey,
                $sortValue
            );

            $data = [
                'productList' => ProductResource::collection($productList->items())->toArray(\request()),
                'pagination' => PaginationResponse::getPagination($productList),
            ];
            return $this->responseOK(view('pages.products.product-list', $data)->render());
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }
}
