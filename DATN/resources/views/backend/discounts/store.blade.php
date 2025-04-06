@include('backend.dashboard.component.formError')
@php
    $url = $config['method'] == 'create' ? route('discounts.store') : route('discounts.update', $discount->id);
    $method = $config['method'] == 'create' ? '' : 'PUT';
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
     @method($method)
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ __('messages.tableHeading') }}</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="name">Tên chương trình giảm giá</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $discount->name ?? '') }}" required>
                                </div>
                                <div class="form-row">
                                    <label for="description">Mô tả</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $discount->description ?? '') }}</textarea>
                                </div>
                                <div class="form-row">
                                    <label for="type">Loại giảm giá</label>
                                    <select class="form-control" id="type" name="type" required>
                                        <option value="percentage"
                                            {{ old('type', $discount->type ?? '') === 'percentage' ? 'selected' : '' }}>
                                            Phần trăm (%)</option>
                                        <option value="fixed"
                                            {{ old('type', $discount->type ?? '') === 'fixed' ? 'selected' : '' }}>Số
                                            tiền cố định</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <label for="value">Giá trị</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="value" name="value"
                                            min="0" step="0.01"
                                            value="{{ old('value', $discount->value ?? '') }}" required>
                                        <span class="input-group-text"
                                            id="value-addon">{{ old('type', $discount->type ?? 'percentage') === 'percentage' ? '%' : config('app.currency_symbol') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="start_date">Ngày bắt đầu</label>
                                    <input type="text" class="form-control datetimepicker" id="start_date"
                                        name="start_date"
                                        value="{{ old('start_date', isset($discount) ? $discount->start_date->format('Y-m-d H:i') : '') }}"
                                        required>
                                </div>
                                <div class="form-row">
                                    <label for="end_date">Ngày kết thúc</label>
                                    <input type="text" class="form-control datetimepicker" id="end_date"
                                        name="end_date"
                                        value="{{ old('end_date', isset($discount) ? $discount->end_date->format('Y-m-d H:i') : '') }}"
                                        required>
                                </div>
                                <div class="form-row">
                                    <label>Sản phẩm áp dụng</label>
                                    <select class="form-control select2-products" id="products" name="products[]"
                                        multiple="multiple">
                                        @foreach($products as $product)
                                        <option value="{{ $product->id }}"
                                            {{ in_array($product->id, old('products', $selectedProducts ?? [])) ? 'selected' : '' }}>
                                            {{ $product->name }} ({{ $product->sku }})</option>
                                        @endforeach
                                    </select>
                            </div>
                                <div class="form-row">
                                    <label>Biến thể sản phẩm áp dụng</label>
                                    <select class="form-control select2-variants" id="variants" name="variants[]"
                                        multiple="multiple">
                                        @foreach($variants as $variant)
                                        <option value="{{ $variant->id }}"
                                            {{ in_array($variant->id, old('variants', $selectedVariants ?? [])) ? 'selected' : '' }}>
                                            {{ $variant->product->name }} - {{ $variant->sku }} ({{ $variant->price }})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.dashboard.component.button')
    </div>
</form>
