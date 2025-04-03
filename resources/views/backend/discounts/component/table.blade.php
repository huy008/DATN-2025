<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th style="width:50px;">
                Trạng thái
            </th>
            <th>Tên khuyến mãi</th>
            <th>Thời gian khuyến mãi</th>
            <th>Mô tả</th>
            <th>Loại</th>
            <th>Giá trị khuyến mãi</th>
            <th>Sản phẩm áp dụng</th>
            <th class="text-center" style="width:100px;">{{ __('messages.tableAction') }}</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($discounts) && is_object($discounts))
            @foreach ($discounts as $discount)
                <tr id="{{ $discount->id }}">
                    <td>
                       {!! $discount->isActive() 
    ? '<i class="fa fa-check-circle" style="font-size:30px;color:green"></i>' 
    : '<i class="fa fa-times-circle" style="font-size:30px;color:red"></i>' !!}
    
                    </td>
                    <td>
                        {{ $discount->name }}
                    </td>
                    <td>
                        {{ $discount->start_date->format('d/m/Y') }} - {{ $discount->end_date->format('d/m/Y') }}
                    </td>
                    <td>
                        {{ $discount->description }}
                    </td>
                    <td>
                        {{ $discount->type === 'fixed' ? 'Giá cố định' : 'Phần trăm' }}
                    </td>
                    <td>
                        {{ $discount->type === 'fixed' ? $discount->value : $discount->value . '%' }}
                    </td>
                    <td>
                        {{ $discount->products->count() + $discount->variants->count() }} sản phẩm
                    </td>
                    <td class="text-center" style="display: flex; justify-content: center; gap: 5px;">
                        <a href="{{ route('discounts.edit', $discount->id) }}" class="btn btn-success"><i
                                class="fa fa-edit"></i></a>
                        <form action="{{ route('discounts.destroy', $discount->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                <i class="fa fa-trash"></i>
                            </button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $discounts->links('pagination::bootstrap-4') }}
