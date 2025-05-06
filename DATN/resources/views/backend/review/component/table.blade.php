<table class="table table-striped table-breviewed">
    <thead>
        <tr>
            {{-- <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th> --}}
            <th>Khách hàng</th>
            <th>Tên sản phẩm</th>
            <th>Đánh giá</th>
            <th>Bình luận</th>
            <th class="text-center">Duyệt bình luận</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($reviews) && is_object($reviews))
            @foreach ($reviews as $review)
                <tr>
                    {{-- <td>
                        <input type="checkbox" value="{{ $review->id }}" class="input-checkbox checkBoxItem">
                    </td> --}}
                    <td>
                        {{ $review->user->name }}
                    </td>
                    <td>
                        {{ $review->product->name }}
                    </td>
                    <td style="width:150px">
                        @for ($i = 1; $i <= 5; $i++)
                            <i class="fa fa-star{{ $i <= $review->rating ? '' : '-o' }} "
                                style="color: gold; font-size:20px;"></i>
                        @endfor
                    </td>
                    <td>
                        {{ $review->comment }}
                    </td>
                    <td class="text-center js-switch-{{ $review->id }}">
                        <input type="checkbox" value="{{ $review->publish}}" class="js-switch status "
                            {{ $review->publish == 2 ? 'checked' : '' }} data-id="{{ $review->id }}" />
                    </td>
                    <td style="display:flex;gap:10px;justify-content:center">
                        <form action="{{ route('review.destroy', $review->id) }}" method="post"
                            onsubmit="return confirm('Bạn có chắc chắn xóa đánh giá không ?');">
                            @csrf
                            <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.status').change(function() {
            var status = $(this).is(':checked') ? 2 : 1; // Nếu check thì 2, bỏ check thì 1
            var id = $(this).data('id');

            $.ajax({
                url: "{{ route('review.updateStatus') }}", // route để update
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: id,
                    status: status
                },
                success: function(response) {
                    if (response.success) {
                        console.log('Cập nhật thành công!');
                    } else {
                        console.log('Có lỗi xảy ra!');
                    }
                },
                error: function(xhr) {
                    console.log('Đã xảy ra lỗi khi cập nhật!');
                }
            });
        });
    });
</script>

{{ $reviews->links('pagination::bootstrap-4') }}
