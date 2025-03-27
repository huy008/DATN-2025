{{-- @include('backend.dashboard.component.breadcrumb', ['title' => $config['seo'][$config['method']]['title']]) --}}
@include('backend.dashboard.component.formError')
@php
    $url =
        $config['method'] == 'create'
            ? route('product.catalogue.store')
            : route('product.catalogue.update', $productCatalogue->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>Danh Mục</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Nhập tên danh mục<span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="name"
                                        value="{{ old('name', $productCatalogue->name ?? '') }}" class="form-control"
                                        placeholder="" autocomplete="off" {{ isset($disabled) ? 'disabled' : '' }}>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                        <label for="" class="control-label text-left">Nhập mô tả</label>
                                        <a href="" class="multipleUploadImageCkeditor"
                                            data-target="ckContent">{{ __('messages.upload') }}</a>
                                    </div>
                                    <textarea name="description" class="form-control ck-editor" placeholder="" autocomplete="off" id="ckContent"
                                        data-height="500" {{ isset($disabled) ? 'disabled' : '' }}>{{ old('description', $productCatalogue->description ?? '') }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.dashboard.component.button')
    </div>
</form>
