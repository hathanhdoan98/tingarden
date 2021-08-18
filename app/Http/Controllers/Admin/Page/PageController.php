<?php

namespace App\Http\Controllers\Admin\Page;

use App\Http\Controllers\Traits\Lib;
use App\Http\Requests\Category\CreateCategoryRequest;
use App\Http\Requests\Page\CreatePageRequest;
use App\Models\Alias;
use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Models\MetaSeo;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageController extends Controller
{
    use Lib;
    public function index()
    {
        return view('Admin.Page.index');
    }

    public function getList(Request $request)
    {

        $data = $request->all();
        $limit = isset($data['limit']) ? (int)$data['limit'] : 10;
        $limit = ($limit > 200) ? 200 : $limit;
        $pages = new Page();
        $status = 'active';
        $sort_key = 'create_at';
        $sort_value = 'DESC';

        if (isset($data['filter'])) {
            $filter = is_array($data['filter']) ? $data['filter'] : json_decode($data['filter'], true);
            if (!empty($filter['status'])) {
                $status = $filter['status'];
            }
            if (!empty($filter['keyword'])) {
                $pages = $pages->where('search', 'like', '%' . Str::slug($filter['keyword'],' ') . '%');
            }

            if (!empty($filter['sort'])) {
                $sort_value = $filter['sort'];
            }

            if (!empty($filter['sort_key'])) {
                $sort_key = $filter['sort_key'];
            }
        }
        $pages = $pages->where('status', $status)->orderBy($sort_key, $sort_value);
        if($limit == -1){
            $pages = $pages->get();
        }else{
            $pages = $pages->paginate($limit);
        }

        return $this->setResponse(['data'=>$pages]);
    }

    public function getById(Request $request)
    {
        if(empty($request->id)){
            return $this->setResponse([
                'success'=>false,
                'message'=>'Vui lòng chọn trang'
                ]
            );
        }
        $page = Page::where('id',$request->id)->with(['alias','meta_seo'])->first();

        return $this->setResponse([
              'data' => $page
           ]
        );

    }

    public function create(CreatePageRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = [];
            $data = $request->except(['image']);
            $data['create_at'] = $data['update_at'] = time();
            $data['status'] = 'active';
            $data['search'] = Str::slug($data['name'], ' ');
            if (isset($request->image) && !is_string($request->image) && $request->image != 'undefined') {
                $rs_upload = uploadFile(["file" => $request->image, "path" => "upload/images/page"]);
                if (!$rs_upload['success']) {
                    return $this->setResponse($rs_upload);
                }
                $data['image'] = $rs_upload['data']['path'];
            }

            $data_alias = $data;
            $data_alias['type'] = 'page';
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

            $page = Page::create($data);
            if ($page) {
                DB::commit();
                return $this->setResponse([
                       'data' => $page,
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
                   'message' => 'Vui lòng chọn trang',
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
        $page = Page::find($data['id']);
        if (!$page) {
            return $this->setResponse([
                   'success' => false,
                   'message' => 'Không tìm thấy trang',
               ]
            );
        }
        $data['index'] = isset($data['index']) ? $data['index'] : $page['index'];
        if (!empty($data['status']) && $page->status != $data['status']) {
            $page->update(['status' => $data['status']]);
            return $this->setResponse([
                   'data' => $page,
                   'message' => 'Đã thay đổi trạng thái',
               ]
            );
        }

        $rs_alias = Alias::where('alias', $data['alias'])->where('id', '!=', $page['alias_id'])->first();
        if ($rs_alias) {
            return $this->setResponse([
                    'success' => false,
                    'message' => 'Đường dẫn đã tồn tại',
                ]
            );
        }

        if (!empty($request->image) &&  !is_string($request->image) && $request->image != 'undefined') {
            $rs_upload = uploadFile(["file" => $request->image, "path" => "upload/images/page"]);
            if (!$rs_upload['success']) {
                return $this->setResponse($rs_upload);
            }
            $data['image'] = $rs_upload['data']['path'];

            if (!empty($page['image'])) {
                removeFile(["path" => $page['image']]);
            }
        }

        $page->update($data);
        $alias = Alias::find($page['alias_id']);
        $meta_seo = MetaSeo::find($page['meta_seo_id']);

        if($alias && isset($data['alias'])){
            $alias->update($data);
        }
        if($meta_seo && isset($data['meta_seo'])){
            $data['meta_seo'] = is_array($data['meta_seo']) ? $data['meta_seo'] : (array)json_decode($data['meta_seo']);
            $meta_seo->update($data['meta_seo']);
        }

        return $this->setResponse([
               'data' => $page,
               'message' => 'Cập nhật thành công',
           ]
        );
    }
}
