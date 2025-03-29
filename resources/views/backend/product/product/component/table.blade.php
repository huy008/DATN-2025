
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:50px;">
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Ảnh sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Mô tả</th>
        <th>Giá</th>
        <th class="text-center">Thao tác</th>
    </tr>
    </thead>
    <tbody>

            @foreach($products as $product)
            <tr id="{{ $product->id }}">
                <td>
                    <input type="checkbox" value="{{ $product->id }}" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <div class="uk-flex uk-flex-middle">
                        <div class="image mr5">
                            <div class="img-cover image-product"><img src="{{ asset($product->img_thumbnail) }}" alt=""></div>
                        </div>
                 
                    </div>
                </td>
                <td>
                           <div class="main-info">
                            <div class="name"><span class="maintitle">{{ $product->name }}</span></div>
                            <div class="catalogue">
                                <span class="text-danger">{{ __('messages.tableGroup') }} </span>
                                {{-- @foreach($product->product_catalogues as $val)
                                @foreach($val->product_catalogue_language as $cat)
                                <a href="{{ route('product.index', ['product_catalogue_id' => $val->id]) }}" title="">{{ $cat->name }}</a>
                                @endforeach
                                @endforeach --}}
                            </div>
                            
                        </div>
                </td>
                <td>
                    {!! $product->description!!}
                </td>
                              <td>
                    {{ $product->base_price }}
                </td>
                <td class="text-center"> 
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('product.delete', $product->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
{{-- {{  $products->links('pagination::bootstrap-4') }} --}}
