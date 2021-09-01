<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Product\CreateProductRequest;
use App\Jobs\OptimizeImage;
use App\Models\Alias;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\MetaSeo;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use Lib;
    protected $upload_path = "upload/images/product";
    public function index()
    {
        return view('Admin.Product.index');
    }

    public function getList(Request $request)
    {
        $data = $request->all();
        $limit = isset($data['limit']) ? (int)$data['limit'] : 10;
        $limit = ($limit > 200) ? 200 : $limit;
        $products = new Product();
        $status = 'active';
        $sort_key = 'create_at';
        $sort_value = 'DESC';

        if (isset($data['filter'])) {
            $filter = is_array($data['filter']) ? $data['filter'] : json_decode($data['filter'], true);
            if (!empty($filter['status'])) {
                $status = $filter['status'];
            }
            if (!empty($filter['keyword'])) {
                $products = $products->where('search', 'like', '%' . Str::slug($filter['keyword'], ' ') . '%');
            }
            if (!empty($filter['category_id'])) {
                $products = $products->where('category_id', $filter['category_id']);
            }

            if (!empty($filter['sort'])) {
                $sort_value = $filter['sort'];
            }

            if (!empty($filter['sort_key'])) {
                $sort_key = $filter['sort_key'];
            }
        }
        $products = $products->where('status', $status)->orderBy($sort_key, $sort_value)->paginate($limit);

        return $this->setResponse(['data'=>$products]);
    }

    public function getById(Request $request)
    {
        if(empty($request->id)){
            return $this->setResponse([
                'success'=>false,
                'message'=>'Vui lòng chọn sản phẩm'
                ]
            );
        }
        $product = Product::where('id',$request->id)->with(['alias','meta_seo'])->first();

        return $this->setResponse([
              'data' => $product
           ]
        );

    }

    public function create(CreateProductRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [];
            $data = $request->except(['image']);
            $data['create_at'] = $data['update_at'] = time();
            $data['status'] = 'active';
            $data['search'] = Str::slug($data['name'], ' ');
            if (isset($request->image) && !is_string($request->image) && $request->image != 'undefined') {
                $rs_upload = $this->uploadImage($request->image);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image'] = $rs_upload['data']['path'];
            }

            if (isset($request->image1) && !is_string($request->image1) && $request->image1 != 'undefined') {
                $rs_upload = $this->uploadImage($request->image1);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image1'] = $rs_upload['data']['path'];
            }

            if (isset($request->image2) && !is_string($request->image2) && $request->image2 != 'undefined') {
                $rs_upload = $this->uploadImage($request->image2);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image2'] = $rs_upload['data']['path'];
            }

            if (isset($request->image3) && !is_string($request->image3) && $request->image3 != 'undefined') {
                $rs_upload = $this->uploadImage($request->image3);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image3'] = $rs_upload['data']['path'];
            }

            $data_alias = $data;
            $data_alias['type'] = 'product';
            $data_alias['alias'] = !empty($data['alias']) ? Str::slug($data['alias'], '-') : Str::slug($data['name'], '-');

            $data_meta_seo = $data['meta_seo'] ?? [];
            $data_meta_seo = is_array($data_meta_seo) ? $data_meta_seo : (array)json_decode($data_meta_seo);

            $alias = Alias::where('alias', $data_alias['alias'])->first();
            if ($alias) {
                return $this->setResponse([
                        'success' => false,
                        'message' => 'Đường dẫn đã tồn tại'
                    ]
                );
            }
            $alias = Alias::create($data_alias);
            $meta_seo = MetaSeo::create($data_meta_seo);

            if(!isset($alias['id']) || !isset($meta_seo['id'])){
                DB::rollBack();
                return $this->setResponse([
                       'success' => false,
                       'message' => 'Xảy ra lỗi',
                   ]
                );
            }
            $data['alias_id'] = $alias['id'];
            $data['meta_seo_id'] = $meta_seo['id'];

            $product = Product::create($data);
            if ($product) {
                DB::commit();
                return $this->setResponse([
                       'data' => $product,
                       'message' => 'Tạo thành công',
                   ]
                );
            }
            DB::rollBack();
            return $this->setResponse([
                    'success' => false,
                    'message' => 'Xảy ra lỗi',
                ]
            );
        }catch (\Exception $e){
            DB::rollBack();
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
                   'message' => 'Vui lòng chọn danh mục',
               ]
            );
        }

        $data['update_at'] = time();
        if(!empty($data['name'])){
            $data['search'] = Str::slug($data['name'],' ');
            $data['alias'] = Str::slug($data['name'],'-');
        }

        if(!empty($request->alias)){
            $data['alias'] = Str::slug($request->alias,'-');
        }
        $product = Product::find($data['id']);
        if (!$product) {
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Không tìm thấy sản phẩm',
               ]
            );
        }
        $data['index'] = isset($data['index']) ? $data['index'] : $product['index'];
        if (!empty($data['status']) && $product->status != $data['status']) {
            $product->update(['status' => $data['status']]);
            return $this->setResponse([
                   'data' => $product,
                   'message' => 'Đã thay đổi trạng thái',
               ]
            );
        }

        $rs_alias = Alias::where('alias', $data['alias'])->where('id', '!=', $product['alias_id'])->first();
        if ($rs_alias) {
            return $this->setResponse([
                    'success' => false,
                    'message' => 'Đường dẫn đã tồn tại',
                ]
            );
        }

        if (!empty($request->image) && !is_string($request->image) && $request->image != 'undefined') {
            $rs_upload = $this->uploadImage($request->image);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image'] = $rs_upload['data']['path'];

            if (!empty($product['image'])) {
                removeFile(["path" => $product['image']]);
            }
        }

        if (isset($request->image1) && !is_string($request->image1) && $request->image1 != 'undefined') {
            $rs_upload = $this->uploadImage($request->image1);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image1'] = $rs_upload['data']['path'];

            if (!empty($product['image1'])) {
                removeFile(["path" => $product['image1']]);
            }
        }

        if (isset($request->image2) && !is_string($request->image2) && $request->image2 != 'undefined') {
            $rs_upload = $this->uploadImage($request->image2);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image2'] = $rs_upload['data']['path'];

            if (!empty($product['image2'])) {
                removeFile(["path" => $product['image2']]);
            }
        }

        if (isset($request->image3) && !is_string($request->image3) && $request->image3 != 'undefined') {
            $rs_upload = $this->uploadImage($request->image3);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image3'] = $rs_upload['data']['path'];

            if (!empty($product['image3'])) {
                removeFile(["path" => $product['image3']]);
            }
        }

        $product->update($data);
        $alias = Alias::find($product['alias_id']);
        $meta_seo = MetaSeo::find($product['meta_seo_id']);

        if($alias && isset($data['alias'])){
            $alias->update($data);
        }
        if($meta_seo && isset($data['meta_seo'])){
            $data['meta_seo'] = is_array($data['meta_seo']) ? $data['meta_seo'] : (array)json_decode($data['meta_seo']);
            $meta_seo->update($data['meta_seo']);
        }

        return $this->setResponse([
               'data' => $product,
               'message' => 'Cập nhật thành công',
           ]
        );
    }

    protected function uploadImage($image){
        $rs_upload = uploadFile([
            "file" => $image,
            "path" => "upload/images/product/640x630",
            "width" => '640',
            "height" => '630',
        ], true);
        if($rs_upload['success']){
            dispatch(new OptimizeImage(getcwd().'/'.$rs_upload['data']['path']));
        }
        return $rs_upload;
    }
}
