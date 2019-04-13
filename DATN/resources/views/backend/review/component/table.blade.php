<table class="table table-striped table-breviewed">
    <thead>
        <tr>
            <th>
                <input type="checkbox" value="" id="checkAll" class="input-checkbox">
            </th>
            <th>Khách hàng</th>
            <th>Tên sản phẩm</th>
            <th>Đánh giá</th>
            <th>Bình luận</th>
            <th class="text-center">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        @if (isset($reviews) && is_object($reviews))
            @foreach ($reviews as $review)
                <tr>
                    <td>
                        <input type="checkbox" value="{{ $review->id }}" class="input-checkbox checkBoxItem">
                    </td>
                    <td>
                        {{ $review->user->name }}
                    </td>
                    <td>
                        {{ $review->product->name }}
                    </td>
                    <td>
                        
                                                      @for ($i = 1; $i <= 5; $i++)
                                                 <i class="fa fa-star{{ $i <= $review->rating ? '' : '-o' }} " style="color: gold; font-size:20px;"></i>
                                                 @endfor
                    </td>
                    <td>
                        {{ $review->comment }}
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
{{ $reviews->links('pagination::bootstrap-4') }}
