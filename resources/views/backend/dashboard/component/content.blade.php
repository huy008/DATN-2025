<div class="row mb15">
    <div class="col-lg-12">
        <div class="form-row">
            <label for="" class="control-label text-left">Nhập tên sản phẩm<span class="text-danger">(*)</span></label>
            <input 
                type="text"
                name="name"
                value="{{ old('name', ($model->name) ?? '' ) }}"
                class="form-control"
                placeholder=""
                autocomplete="off"
                {{ (isset($disabled)) ? 'disabled' : '' }}
            >
        </div>
    </div>
</div>
<div class="row mb30">
    <div class="col-lg-12">
        <div class="form-row">
            <label for="" class="control-label text-left">Nhập mô tả ngắn</label>
            <textarea 
                name="short_description" 
                class="ck-editor" 
                id="ckDescription"
                {{ (isset($disabled)) ? 'disabled' : '' }} 
                data-height="100">{{ old('short_description', ($model->short_description) ?? '') }}</textarea>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="form-row">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <label for="" class="control-label text-left">Nhập mô tả</label>
                <a href="" class="multipleUploadImageCkeditor" data-target="ckContent">{{ __('messages.upload') }}</a>
            </div>
            <textarea
                name="description"
                class="form-control ck-editor"
                placeholder=""
                autocomplete="off"
                id="ckContent"
                data-height="500"
                {{ (isset($disabled)) ? 'disabled' : '' }}
            >{{ old('description', ($model->description) ?? '' ) }}</textarea>
        </div>
    </div>
</div>