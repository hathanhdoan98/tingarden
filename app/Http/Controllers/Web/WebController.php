<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProvinceResource;
use App\Http\Responses\PaginationResponse;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Services\AddressService;
use App\Services\AliasService;
use App\Services\CartService;
use App\Services\CategoryService;
use App\Services\ProductService;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class WebController extends Controller
{
    use Lib;

    /**
     * @var CategoryService $categoryService
     */
    protected $categoryService;

    /**
     * @var AliasService $aliasService
     */
    protected $aliasService;

    /**
     * @var ProductService $productService
     */
    protected $productService;

    /**
     * @var CartService $cartService
     */
    protected $cartService;

     /**
     * @var SettingService $cartService
     */
    protected $settingService;

    public function __construct(
        CategoryService $categoryService,
        AliasService $aliasService,
        ProductService $productService,
        CartService $cartService,
        SettingService $settingService
    ) {
        $this->categoryService = $categoryService;
        $this->aliasService = $aliasService;
        $this->productService = $productService;
        $this->cartService = $cartService;
        $this->settingService = $settingService;

        $settings = $this->settingService->getSetting(['type'=>config('setting.type.web')])->keyBy('key')->toArray();
        $categories = $categoryService->getAllCategories(config('common.status.active'))->toArray();
        View::share('categories', $categories);
        View::share('settings', $settings);
    }

    public function index($alias = '')
    {
        if (empty($alias)) {
            return $this->getHomePage();
        }
        $alias = $this->aliasService->findOneByAlias($alias);
        if ($alias) {
            switch ($alias->model_type) {
                case Product::class:
                    return $this->getProductDetail($alias->model_id);
                case Category::class:
                    return $this->getCategory($alias->model_id);
                case Post::class:
                    return $this->getPostDetail($alias->model_id);
            }
        }
        abort(404);
    }

    public function getHomePage()
    {
        return \view('index');
    }

    public function getCategory(int $id)
    {
        $category = $this->categoryService->findCategory($id);
        $products = $this->productService->paginateAll(
            1,
            20,
            [
                'category_id' => $id,
                'status' => config('common.status.active')
            ],
            'created_at',
            config('pagination.sort.desc')
        );
        return view('pages.products.index', [
            'category' => $category,
            'productList' => ProductResource::collection($products->items())->toArray(\request()),
            'pagination' => PaginationResponse::getPagination($products),
        ]);
    }

    public function getAllProducts(Request $request)
    {
        $products = $this->productService->paginateAll(
            1,
            20,
            [
                'status' => config('common.status.active'),
                'keyword' => $request->input('keyword')
            ],
            'created_at',
            config('pagination.sort.desc')
        );
        return view('pages.products.index', [
            'productList' => ProductResource::collection($products->items())->toArray(\request()),
            'pagination' => PaginationResponse::getPagination($products),
        ]);
    }

    public function search()
    {
        return 123;
    }

    public function getProductDetail(int $id)
    {
        $product = $this->productService->findProduct($id);
        if(!$product){
            abort(404);
        }
        $relatedProducts = $this->productService->getRelatedProducts($id, $product['category_id']);
        $relatedProducts = ProductResource::collection($relatedProducts)->toArray(\request());
        return view('pages.product-detail', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function getPosts(Post $post)
    {
        return view('pages.post');
    }

    public function getPostDetail(Post $post)
    {
        return view('pages.post');
    }

    public function getCart(Request $request, AddressService $addressService)
    {
        $carts = $this->cartService->getCarts();
        $step = $request->input('step',1);
        $provinces = $addressService->getProvinces();
        return view('pages.cart.index', [
            'step'=>$step,
            'carts'=>$carts,
            'sub_total_price' => array_sum(array_column($carts, 'sub_price')),
            'provinces' => $provinces
        ]);
    }
}
