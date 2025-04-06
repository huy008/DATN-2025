<div class="ibox w">
    <div class="ibox-title">
        <h5>Chọn danh mục</h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <select name="product_catalogue_id" class="form-control setupSelect2" id="">
                        @foreach($productCategories as $val)
                        <option {{ 
                            $val->id == old('product_catalogue_id', (isset($product->product_catalogue_id)) ? $product->product_catalogue_id : '') ? 'selected' : '' 
                            }} value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>
        </div>
        {{-- @php
            $catalogue = [];
            if(isset($product)){
                foreach($product->product_catalogues as $key => $val){
                    $catalogue[] = $val->id;
                }
            }
        @endphp --}}
    </div>
</div>
<div class="ibox w">
    <div class="ibox-title">
        <h5>Nhập thông tin</h5>
    </div>
    <div class="ibox-content">
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for="">Nhập mã SKU</label>
                    <input 
                        type="text"
                        name="sku"
                        value="{{ old('sku', ($product->sku) ?? time()) }}"
                        class="form-control"
                    >
                </div>
            </div>
        </div>
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for="">Nhập số lượng</label>
                    <input 
                        type="text"
                        name="stock_quantity"
                        value="{{ old('stock_quantity', ($product->stock_quantity) ?? null) }}"
                        class="form-control "
                    >
                </div>
            </div>
        </div>
        <div class="row mb15">
            <div class="col-lg-12">
                <div class="form-row">
                    <label for="">Nhập giá</label>
                    <input 
                        type="text"
                        name="price"
                        value="{{ old('base_price', (isset($product)) ? number_format($product->base_price, 0 , ',', '.') : '') }}"
                        class="form-control int"
                    >
                </div>
            </div>
        </div>
    </div>
</div>
<div class="ibox w">
    <div class="ibox-title">
        <h5>Chọn ảnh</h5>
    </div>
    <div class="ibox-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-row">
                    <span class="image img-cover image-target"><img src="{{ (old('img_thumbnail', ($model->img_thumbnail) ?? '' ) ? old('img_thumbnail', ($model->img_thumbnail) ?? '')   :  'backend/img/not-found.jpg') }}" alt=""></span>
                    <input type="hidden" name="image" value="{{ old('image', ($model->image) ?? '' ) }}">
                </div>
            </div>
        </div>
    </div>
</div>