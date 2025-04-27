@include('backend.dashboard.component.breadcrumb', ['title' => "Khuyến mãi"])
@include('backend.dashboard.component.formError')

@php
    $url = $config['method'] == 'create' ? route('discounts.store') : route('discounts.update', $discount->id);
    $method = $config['method'] == 'create' ? '' : 'PUT';
@endphp

<form action="{{ $url }}" method="post" class="box">
    @csrf
    @if ($method)
        @method($method)
    @endif

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ $config['method'] == 'create' ? 'Tạo chương trình giảm giá' : 'Chỉnh sửa chương trình giảm giá' }}
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            {{-- Cột trái --}}
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Tên chương trình giảm giá <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $discount->name ?? '') }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="description">Mô tả</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $discount->description ?? '') }}</textarea>
                                </div>
                            </div>

                            {{-- Cột phải --}}
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="start_date">Ngày bắt đầu <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="start_date" name="start_date"
                                            value="{{ old('start_date', isset($discount) ? $discount->start_date->format('Y-m-d') : '') }}"
                                            required>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="end_date">Ngày kết thúc <span class="text-danger">*</span></label>
                                        <input type="date" class="form-control" id="end_date" name="end_date"
                                            value="{{ old('end_date', isset($discount) ? $discount->end_date->format('Y-m-d') : '') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="type">Loại giảm giá <span class="text-danger">*</span></label>
                                        <select class="form-control" id="type" name="type" required>
                                            <option value="percentage"
                                                {{ old('type', $discount->type ?? '') === 'percentage' ? 'selected' : '' }}>
                                                Phần trăm (%)</option>
                                            <option value="fixed"
                                                {{ old('type', $discount->type ?? '') === 'fixed' ? 'selected' : '' }}>
                                                Số tiền cố định</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="value">Giá trị <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="value" name="value"
                                                min="0" step="0.01"
                                                value="{{ old('value', $discount->value ?? '') }}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> {{-- row --}}

                        {{-- Sản phẩm áp dụng --}}
                        <div class="form-group">
                            <label for="products">Sản phẩm áp dụng <span class="text-danger">*</span></label>
                            <select class="form-control select2-products" id="products" name="products[]" multiple
                                required placeholder="Chọn sản phẩm">
                                @foreach ($products as $product)
                                    <option value="{{ $product->id }}"
                                        {{ in_array($product->id, old('products', $selectedProducts ?? [])) ? 'selected' : '' }}>
                                        {{ $product->name }} ({{ $product->sku }})
                                    </option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted mt-1">
                                * Chọn sản phẩm, tự động áp dụng cho tất cả các biến thể.
                            </small>
                        </div>
                    </div> {{-- ibox-content --}}
                </div> {{-- ibox --}}
            </div> {{-- col --}}
        </div> {{-- row --}}

        @include('backend.dashboard.component.button')
    </div> {{-- wrapper --}}
</form>

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.10.0/js/bootstrap-datepicker.min.js">
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.select2-products').select2({
            placeholder: "Chọn sản phẩm",
            allowClear: true
        });

        // Khởi tạo ngày tháng cho các trường date
        $('#start_date, #end_date').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    });
</script>
