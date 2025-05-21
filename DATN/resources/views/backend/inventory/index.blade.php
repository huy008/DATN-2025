    <div class="row mt20">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h2 class="mb-4"><i class="fa fa-boxes"></i> Thống kê hàng tồn kho</h2>
                    <div>
                        <div class="ibox-content">
                            @forelse($products as $product)
                                <div
                                    class="card shadow-sm mb-3 border-left-{{ $product->variants->sum('stock_quantity') == 0 ? 'danger' : ($product->variants->sum('stock_quantity') <= 5 ? 'warning' : 'success') }}">
                                    <div class="card-header bg-light" id="heading-{{ $product->id }}">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <button class="btn btn-link text-dark font-weight-bold p-0" type="button"
                                                data-toggle="collapse" data-target="#collapse-{{ $product->id }}"
                                                aria-expanded="true" aria-controls="collapse-{{ $product->id }}">
                                                <i class="fa fa-caret-down mr-2"></i> {{ $product->name }}
                                            </button>
                                            <span id="total-stock-badge-{{ $product->id }}"
                                                class="badge badge-pill badge-primary ml-3">
                                                Tổng tồn: {{ $product->variants->sum('stock_quantity') }}
                                            </span>
                                        </div>
                                    </div>

                                    <div id="collapse-{{ $product->id }}" class="collapse"
                                        aria-labelledby="heading-{{ $product->id }}" data-parent="#inventoryAccordion">
                                        <div class="card-body p-0">
                                            <table class="table table-sm table-hover mb-0">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th>Biến thể</th>
                                                        <th>SKU</th>
                                                        <th>Trạng thái</th>
                                                        <th>Tồn kho</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($product->variants as $variant)
                                                        @php
                                                            $bg =
                                                                $variant->stock_quantity == 0
                                                                    ? 'table-danger'
                                                                    : ($variant->stock_quantity <= 5
                                                                        ? 'table-warning'
                                                                        : '');
                                                        @endphp
                                                        <tr class="{{ $bg }}">
                                                            <td>
                                                                {{ $variant->attributes->map(fn($attribute) => $attribute->attributeValue->value)->implode(' - ') }}
                                                            </td>
                                                            <td>{{ $variant->sku }}</td>
                                                            <td>
                                                                @if ($variant->stock_quantity == 0)
                                                                    <span class="badge badge-danger">Hết hàng</span>
                                                                @elseif($variant->stock_quantity <= 5)
                                                                    <span class="badge badge-warning">Sắp hết</span>
                                                                @else
                                                                    <span class="badge badge-success">Còn hàng</span>
                                                                @endif
                                                            </td>
                                                            <td class="text-center">
                                                                <form
                                                                    action="{{ route('admin.variants.updateStock', $variant->id) }}"
                                                                    method="POST"
                                                                    class="update-stock-form form-inline justify-content-center"
                                                                    data-id="{{ $variant->id }}">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="input-group input-group-sm"
                                                                        style="display:flex;gap:10px">
                                                                        <input type="number" name="stock_quantity"
                                                                            value="{{ $variant->stock_quantity }}"
                                                                            class="form-control form-control-sm w-75 text-center"
                                                                            style="max-width: 80px;" min="0">
                                                                        <div class="input-group-append"
                                                                            style="margin-l-10px">
                                                                            <button type="submit"
                                                                                class="btn btn-sm btn-primary">Lưu</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="4" class="text-center text-muted">Không có
                                                                biến
                                                                thể</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="alert alert-info">Không có sản phẩm nào để thống kê.</div>
                            @endforelse
                        </div>
                    </div>
                    {{ $products->links('pagination::bootstrap-4') }}

                    <script>
                        $(document).ready(function() {
                            $('.update-stock-form').submit(function(e) {
                                e.preventDefault(); // Ngăn chặn form submit mặc định

                                var form = $(this);
                                var url = form.attr('action');
                                var data = form.serialize();

                                $.ajax({
                                    url: url,
                                    method: 'POST',
                                    data: data,
                                    success: function(response) {
                                        console.log('Response:', response);
                                        alert('Cập nhật tồn kho thành công!');
                                        if (response.totalStock !== undefined && response.productId !==
                                            undefined) {
                                            $('#total-stock-badge-' + response.productId).text('Tổng tồn: ' +
                                                response.totalStock);
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        // Xử lý lỗi nếu có
                                        alert('Có lỗi xảy ra khi cập nhật tồn kho!');
                                    }
                                });
                            });
                        });
                    </script>
