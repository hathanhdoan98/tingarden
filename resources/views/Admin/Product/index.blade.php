@extends('Admin.Layouts.app')
@section('content')
    {{--        <div class="page-header">--}}
    {{--            <h3 class="page-title">Danh sách quản trị viên</h3>--}}
    {{--            <nav aria-label="breadcrumb">--}}
    {{--                <ol class="breadcrumb">--}}
    {{--                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>--}}
    {{--                    <li class="breadcrumb-item active" aria-current="page">Quản trị viên</li>--}}
    {{--                </ol>--}}
    {{--            </nav>--}}
    {{--        </div>--}}
    <div class="row" id="object-product" api-list="{{route('admin.product.get_list')}}"
         api-create="{{route('admin.product.create')}}" api-get-item="{{ route('admin.product.get_product') }}"
         api-update="{{ route('admin.product.update') }}" api-get-categories="{{ route('admin.category.get_list') }}">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body ">
                    <div class="d-flex flex-wrap flex-lg-nowrap justify-content-between mb-2">
                        <div class="filter-action-checked w-100 w-sm-auto">
                            <div class="filter-block d-flex flex-wrap flex-sm-nowrap  active">
                                <button @click.stop.prevent="showModalAdd()" type="button"
                                        class="btn btn-gradient-success btn-sm w-100">Thêm mới
                                    <i class="mdi mdi-plus btn-icon-append"></i>
                                </button>
                                <div class="searchbox advance-searchs d-inline-block w-100 w-sm-auto ml-1 mr-sm-1">
                                    <div class="tags_input">
                                        <div class="input_search w-100 form-inline">
                                            <input class="form-control form-control-sm"
                                                   v-model="pagination.filter.keyword" type="text"
                                                   placeholder="Tìm kiếm theo tên, category, code..">
                                        </div>
                                    </div>
                                </div>
                                <select2 v-model="pagination.filter.category_id" :options="categories"
                                         placeholder="Tìm kiếm theo danh mục"
                                         class="form-control form-control-sm"></select2>
                            </div>
                        </div>

                        <div class="d-flex flex-sm-nowrap flex-wrap w-100 float-right w-sm-auto">
                            <div class="d-flex w-100 w-sm-auto">
                                <div class="dropdown d-inline-block text-nowrap">
                                    <button @click.stop.prevent="pagination.filter.status='active'"
                                            :class="(pagination.filter.status=='active') ? 'active' : ''"
                                            title="Kích hoạt" v-tooltip
                                            class="btn border btn-outline-success btn-xs">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button @click.stop.prevent="pagination.filter.status='inactive'"
                                            :class="(pagination.filter.status=='inactive') ? 'inactive  ' : ''"
                                            title="Thùng rác" v-tooltip
                                            class="btn border btn-outline-danger ml-1 btn-xs">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table table-bordered table-responsive">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sản phẩm</th>
                            <th @click="sort('name')"> Tên <i class="fas fa-sort float-right"
                                                              :class="showClassSort('name')"></i></th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Giá khuyến mãi</th>
                            <th @click="sort('create_at')"> Ngày tạo<i class="fas fa-sort float-right"
                                                                       :class="showClassSort('create_at')"></i>
                            <th>Trạng thái</th>
                            <th style="width: 5%">Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <template v-if="data != ''">
                            <tr v-for="(item, index) in data">
                                <td> @{{ index + 1 + (pagination.limit * (pagination.page - 1)) }}</td>
                                <td> @{{item.code ?? ''}}</td>
                                <td> @{{item.name}}</td>
                                <td v-if="item.image">
                                    <image :src="'/'+item.image"></image>
                                </td>
                                <td v-else></td>
                                <td> @{{formatNumber(item.price)}}</td>
                                <td> @{{formatNumber(item.sale_off_price)}}</td>
                                <td> @{{item.create_at | dd-mm-yyyy }}</td>
                                <td><label class="badge text-white" :class="showClass(item.status)">@{{
                                        showStatus(item.status) }}</label></td>
                                <td class="text-center text-nowrap">
                                    <button title="Chỉnh sửa" v-tooltip class="btn btn-sm btn-outline-warning"
                                            @click.stop.prevent="showModalUpdate(item.id)"><i class="fas fa-pen"></i>
                                    </button>
                                    <button @click.stop.prevent="changeStatus(item,'inactive')"
                                            v-if="item.status == 'active'" title="Khóa" v-tooltip
                                            class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i>
                                    </button>
                                    <button @click.stop.prevent="changeStatus(item,'active')"
                                            v-if="item.status == 'inactive'" data-original-title="Khôi phục" v-tooltip
                                            class="btn btn-sm btn-outline-success"><i class="fas fa-undo"></i>
                                    </button>
                                </td>
                            </tr>
                        </template>
                        <template v-else>
                            <tr>
                                <td colspan="8">
                                    <p class="text-center mt-4 mb-4">Không tìm thấy dữ liệu</p>
                                </td>
                            </tr>
                        </template>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center mt-2">
                        <form class="w-50">
                            <select class="custom-select w-25" v-model="pagination.limit">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="100">100</option>
                            </select>
                            <span>Hiển thị <strong> @{{ ((pagination.page - 1 ) * pagination.limit) + 1}} - @{{ ((pagination.page * pagination.limit) > pagination.totalrecords) ? pagination.totalrecords : (pagination.page * pagination.limit)}} </strong> trên <strong> @{{pagination.totalrecords}} </strong></span>
                        </form>
                        <pagination :current="pagination.page"
                                    v-model="pagination.page"
                                    :total="pagination.last_page"></pagination>
                    </div>
                </div>
            </div>
        </div>


        <div tabindex="-1" class="modal fade modal-add" id="modal-create">
            <div class="modal-dialog modal-xl">
                <div class="modal-content bg-white">
                    <div class="modal-header">
                        <h5 id="exampleModalCenterTitle" class="modal-title">@{{ (data_create.id) ? 'Cập nhât' :
                            'Thêm mới' }}</h5>
                        <button type="button" data-dismiss="modal" aria-label="Close" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="group-tabs ">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs mb-4" role="tablist">
                                <li role="presentation" class="nav-item"><a href="#home" class="nav-link  active"
                                                                            aria-controls="home" role="tab"
                                                                            data-toggle="tab">Thông tin chung</a></li>
                                <li role="presentation" class="nav-item "><a href="#settings" class="nav-link"
                                                                             aria-controls="settings" role="tab"
                                                                             data-toggle="tab">SEO</a></li>
                            </ul>

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <div class="row" id="form-create-user">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Mã sản phẩm
                                                </p>
                                                <input v-model="data_create.code"
                                                       name="code" type="text" class="form-control form-control-sm">
                                                <div v-show="errors.has('code')" class="text-danger">
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <span>@{{ errors.first('code') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Tên sản phẩm
                                                </p>
                                                <input v-validate="'required'" data-vv-as="Tên sản phẩm" name="name"
                                                       v-model="data_create.name" type="text"
                                                       class="form-control form-control-sm">
                                                <div v-show="errors.has('name')" class="text-danger">
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <span>@{{ errors.first('name') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Đường dẫn<span class="text-danger">*</span></p>
                                                <input v-validate="'required'" data-vv-as="Đường dẫn" name="alias"
                                                       v-model="data_create.alias" type="text"
                                                       class="form-control form-control-sm">
                                                <small v-if="errors.has('alias')" class="text-danger">@{{
                                                    errors.first('alias') }}</small>
                                            </div>
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Giá
                                                </p>
                                                <input v-validate="'required'" data-vv-as="Giá sản phẩm" name="price"
                                                       v-model="data_create.price" type="number" min="0"
                                                       class="form-control form-control-sm">
                                                <div v-show="errors.has('price')" class="text-danger">
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <span>@{{ errors.first('price') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Giá khuyến mãi
                                                </p>
                                                <input v-validate="'required'" data-vv-as="Giá sản phẩm"
                                                       name="sale_off_price"
                                                       v-model="data_create.sale_off_price" type="number" min="0"
                                                       class="form-control form-control-sm">
                                                <div v-show="errors.has('sale_off_price')" class="text-danger">
                                                    <i class="fas fa-exclamation-circle"></i>
                                                    <span>@{{ errors.first('sale_off_price') }}</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Danh mục</p>
                                                <select2 name="category"
                                                         v-model="data_create.category_id" :options="categories"
                                                         class="form-control form-control-sm"></select2>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="text-center ">Ảnh đại diện</p>
                                                <div class="avatar-wrapper">
                                                    <img v-if="data_create.image == ''" class="profile-pic" image-type="image"
                                                         src="../resources/admin/assets/images/default-thumbnail.png"/>
                                                    <img v-else class="profile-pic" image-type="image" :src="'../'+data_create.image"/>
                                                    <div class="upload-button" image-type="image">
                                                        <i class="fas fa-camera"></i>
                                                    </div>
                                                    <input ref="file" image-type="image" class="file-upload" type="file" accept="image/*"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-center ">Ảnh phụ 1</p>
                                                        <div class="avatar-wrapper sub-avatar-wrapper">
                                                            <img v-if="data_create.image1 == ''" class="profile-pic" image-type="image1"
                                                                 src="../resources/admin/assets/images/default-thumbnail.png"/>
                                                            <img v-else class="profile-pic" image-type="image1" :src="'../'+data_create.image1"/>
                                                            <div class="upload-button" image-type="image1">
                                                                <i class="fas fa-camera"></i>
                                                            </div>
                                                            <input ref="sub_file1" class="file-upload" image-type="image1" type="file" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-center ">Ảnh phụ 2</p>
                                                        <div class="avatar-wrapper sub-avatar-wrapper">
                                                            <img v-if="data_create.image2 == ''" class="profile-pic" image-type="image2"
                                                                 src="../resources/admin/assets/images/default-thumbnail.png"/>
                                                            <img v-else class="profile-pic" image-type="image2" :src="'../'+data_create.image2"/>
                                                            <div class="upload-button" image-type="image2">
                                                                <i class="fas fa-camera"></i>
                                                            </div>
                                                            <input ref="sub_file2" class="file-upload" image-type="image2" type="file" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <p class="text-center ">Ảnh phụ 3</p>
                                                        <div class="avatar-wrapper sub-avatar-wrapper">
                                                            <img v-if="data_create.image3 == ''" class="profile-pic" image-type="image3"
                                                                 src="../resources/admin/assets/images/default-thumbnail.png"/>
                                                            <img v-else class="profile-pic" image-type="image3" :src="'../'+data_create.image3"/>
                                                            <div class="upload-button" image-type="image3">
                                                                <i class="fas fa-camera"></i>
                                                            </div>
                                                            <input ref="sub_file3" class="file-upload" image-type="image3" type="file" accept="image/*"/>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Thứ tự xuất hiện</p>
                                                <number v-model="data_create.index"
                                                        class="form-control form-control-sm"></number>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Số sao</p>
                                                <input v-model="data_create.rate" type="number" min="0" max="5"
                                                       class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Tổng số đánh giá</p>
                                                <input v-model="data_create.total_rate" type="number"
                                                       class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="settings">
                                    <div class="row" id="form-create-user">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Meta Title</p>
                                                <input v-model="data_create.meta_seo.title" type="text"
                                                       class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Meta Keyword
                                                </p>
                                                <input v-model="data_create.meta_seo.keyword" type="text"
                                                       class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <p class="m-0 font-0-9">Meta Description</p>
                                                <textarea v-model="data_create.meta_seo.description" type="text"
                                                          rows="4" class="form-control form-control-sm"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary">Hủy</button>
                        <button v-if="!data_create.id" type="button" class="btn btn-success theme-color"
                                @click.stop.prevent="create()">
                            Thêm mới
                        </button>
                        <button v-else type="button" class="btn btn-success theme-color"
                                @click.stop.prevent="update()">
                            Cập nhật
                        </button>
                    </div>
                </div>
            </div>
        </div>


    </div>





@endsection
@section('script')
    <script>
        var product = new objectProduct('#object-product');

        function objectProduct(element) {

            // Vue.use(VeeValidate, {
            //     locale: 'vi',
            //     fieldsBagName: 'vvFields'
            // });
            var timeout = null;
            this.vm = new Vue({
                    el: element,
                    data: {
                        loading: false,
                        api_get_list: $(element).attr('api-list'),
                        api_create: $(element).attr('api-create'),
                        api_update: $(element).attr('api-update'),
                        api_get_item: $(element).attr('api-get-item'),
                        api_get_categories: $(element).attr('api-get-categories'),
                        // api:this.$refs.login,
                        categories: [],
                        data: [],
                        pagination: {
                            filter: {
                                keyword: '',
                                status: 'active',
                                sort: 'desc',
                                sort_key: '',
                                category_id: ''
                            },
                            limit: 10,
                            current: 1,
                            page: 1,
                            total: 0,
                            totalrecords: 0,
                        },
                        data_create: {
                            code: '',
                            name: '',
                            index: 0,
                            rate: 0,
                            total_rate: 0,
                            short_description: '',
                            description: '',
                            category_id: '',
                            alias: '',
                            image: '',
                            image1: '',
                            image2: '',
                            image3: '',
                            price: 0,
                            sale_off_price: 0,
                            meta_seo: {
                                name: '',
                                description: '',
                                keyword: '',
                            }
                        },
                        data_clone: {},
                        price: {
                            quantity_start: 0,
                            quantity_end: 0,
                            time: 0,
                            price: 0,
                            price_sale: 0,
                        },


                    },
                    methods: {
                        load: function () {
                            var vm = this;
                            vm.isLoading = true;
                            axios.get(vm.api_get_list, {params: vm.pagination})
                                .then(function (response) {
                                    var data = response.data;
                                    vm.isLoading = false;
                                    if (!data.success) {
                                        helper.showNotification(data.message, 'danger', 1000);
                                        return;
                                    }
                                    vm.data = data.data.data;
                                    vm.pagination.page = data.data.current_page;
                                    vm.pagination.last_page = data.data.last_page;
                                    vm.pagination.totalrecords = data.data.total;
                                    vm.$forceUpdate();
                                })
                                .catch(function (error) {
                                    vm.is_loading = false;
                                    // helper.showNotification('Thực hiện thao tác không thành công !!!', 'error', 'danger', 1000);
                                });
                        },
                        showModalAdd: function () {
                            this.resetData();
                            this.getCategories();
                            this.$forceUpdate();
                            $('.modal-add').modal('show');
                        },
                        getCategories: function () {
                            var vm = this;
                            axios.get(vm.api_get_categories, {params: {limit: -1}})
                                .then(function (response) {
                                    var data = response.data;
                                    vm.isLoading = false;
                                    if (!data.success) {
                                        helper.showNotification(data.message,'danger',1000);
                                        return;
                                    }
                                    vm.categories = data.data;
                                })
                                .catch(function (error) {
                                    vm.is_loading = false;
                                });
                        },
                        create: function () {
                            this.$validator.validate().then(valid => {
                                if (valid) {
                                    var vm = this;
                                    vm.isLoading = true;
                                    let form_data = new FormData();
                                    for (let key in this.data_create) {
                                        if (this.data_create[key] != null && this.data_create[key].length) {
                                            form_data.append(key, this.data_create[key]);
                                        }
                                    }
                                    if(this.$refs.file.files[0]){
                                        form_data.set('image', this.$refs.file.files[0]);
                                    }
                                    if(this.$refs.sub_file1.files[0]){
                                        form_data.set('image1', this.$refs.sub_file1.files[0]);
                                    }
                                    if(this.$refs.sub_file2.files[0]){
                                        form_data.set('image2', this.$refs.sub_file2.files[0]);
                                    }
                                    if(this.$refs.sub_file3.files[0]){
                                        form_data.set('image3', this.$refs.sub_file3.files[0]);
                                    }

                                    form_data.set('meta_seo', JSON.stringify(this.data_create.meta_seo));
                                    axios.post(vm.api_create, form_data).then(function (response) {
                                        vm.isLoading = false;
                                        var data = response.data;
                                        if (!data.success) {
                                            helper.showNotification(data.message, 'danger');
                                            return;
                                        }
                                        helper.showNotification(data.message, 'success');
                                        $('#modal-create').modal('hide');
                                        vm.load();
                                    })
                                }
                            })
                        },
                        showModalUpdate: function (id = null) {
                            var vm = this;
                            axios.get(vm.api_get_item, {params: {id: id}}).then(function (response) {
                                vm.isLoading = false;
                                var data = response.data;
                                if (!data.success) {
                                    helper.showNotification(data.message,'danger', 1000);
                                    return;
                                }
                                vm.data_create = data.data;
                                if(vm.data_create.alias.alias){
                                    vm.data_create.alias = vm.data_create.alias.alias;
                                }
                                vm.$forceUpdate();
                                vm.getCategories();
                                $('#modal-create').modal('show');

                            })

                        },
                        update: function () {
                            var vm = this;
                            vm.isLoading = true;
                            let form_data = new FormData();
                            for (let key in this.data_create) {
                                if (this.data_create[key]) {
                                    form_data.append(key, this.data_create[key]);
                                }
                            }
                            if(this.$refs.file.files[0]){
                                form_data.set('image', this.$refs.file.files[0]);
                            }
                            if(this.$refs.sub_file1.files[0]){
                                form_data.set('image1', this.$refs.sub_file1.files[0]);
                            }
                            if(this.$refs.sub_file2.files[0]){
                                form_data.set('image2', this.$refs.sub_file2.files[0]);
                            }
                            if(this.$refs.sub_file3.files[0]){
                                form_data.set('image3', this.$refs.sub_file3.files[0]);
                            }
                            form_data.set('meta_seo', JSON.stringify(this.data_create.meta_seo));
                            axios.post(vm.api_update, form_data).then(function (response) {
                                vm.isLoading = false;
                                var data = response.data;
                                if (!data.success) {
                                    helper.showNotification(data.message, 'danger');
                                    return;
                                }
                                helper.showNotification(data.message, 'success');
                                $('#modal-create').modal('hide');
                                vm.load();
                            })
                        },
                        changeStatus: function (item, status) {
                            var vm = this;
                            item.status = status;
                            axios.post(vm.api_update, item).then(function (response) {
                                vm.isLoading = false;
                                var data = response.data;
                                if (!data.success) {
                                    helper.showNotification(data.message, 'danger');
                                    return;
                                }
                                helper.showNotification(data.message, 'success');
                                vm.load();

                            })
                        },
                        resetData: function (event) {
                            this.data_create = JSON.parse(JSON.stringify(this.data_clone));
                            this.$refs.file.type = 'text'
                            this.$refs.file.type = 'file'
                            $('input.file-upload').val('');
                            $('img[image-type]').attr('src','../resources/admin/assets/images/default-thumbnail.png');
                            this.$forceUpdate();
                        },
                        showStatus: function (status) {
                            switch (status) {
                                case 'active':
                                    return 'Kích hoạt'
                                    break
                                case 'inactive':
                                    return 'Khóa'
                                    break
                            }

                        },
                        formatNumber: function (number) {
                            return helper.formatNumber(number)
                        },
                        showClass: function (status) {
                            switch (status) {
                                case 'active':
                                    return 'bg-success'
                                    break
                                case 'inactive':
                                    return 'bg-danger'
                                    break
                            }
                        },
                        sort: function (key) {
                            this.pagination.filter.sort_key = key;
                            if (this.pagination.filter.sort === 'desc') {
                                this.pagination.filter.sort = 'asc'
                            } else {
                                this.pagination.filter.sort = 'desc'
                            }
                        },
                        showClassSort: function (key) {
                            if (this.pagination.filter.sort_key != '' && this.pagination.filter.sort_key == key) {
                                switch (this.pagination.filter.sort) {
                                    case 'desc':
                                        return 'fa-sort-up'
                                        break
                                    case 'asc':
                                        return 'fa-sort-down'
                                        break
                                }
                            }
                            return 'fa-sort';
                        },
                    },

                    created: function () {
                        this.data_clone = JSON.parse(JSON.stringify(this.data_create));
                        this.getCategories();
                        this.load();
                    },
                    computed: {},
                    mounted: function () {

                    },
                    watch: {
                        'pagination.page': function (newval, oldval) {
                            if (newval != oldval) {
                                this.load();
                            }
                        },
                        'pagination.limit': function (newval, oldval) {
                            if (newval != oldval) {
                                if (this.pagination.page == 1) {
                                    this.load();
                                } else {
                                    this.pagination.page = 1;
                                }
                            }
                        },
                        'pagination.filter.sort': function (newval, oldval) {
                            if (newval != oldval) {
                                this.load();
                            }
                        },
                        'pagination.filter.sort_key': function (newval, oldval) {
                            if (newval != oldval) {
                                this.load();
                            }
                        },
                        'pagination.filter.status': function (newval, oldval) {
                            if (newval != oldval) {
                                if (this.pagination.page == 1) {
                                    this.load();
                                } else {
                                    this.pagination.page = 1;
                                }
                            }
                        },
                        'pagination.filter.keyword': function (newval, oldval) {
                            var vm = this;
                            clearTimeout(timeout);
                            timeout = setTimeout(function () {
                                if (vm.pagination.page == 1) {
                                    vm.load();
                                } else {
                                    vm.pagination.page = 1;
                                }
                            }, 1000);
                        },
                        'data_create.name': function (val) {
                            this.data_create.alias = helper.createSlug(val, '-');
                        },
                        'pagination.filter.category_id': function (newval, oldval) {
                            if (this.pagination.page == 1) {
                                this.load();
                            } else {
                                this.pagination.page = 1;
                            }
                        }
                    },
                }
            )
            ;
            return this;
        }


    </script>
@endsection
