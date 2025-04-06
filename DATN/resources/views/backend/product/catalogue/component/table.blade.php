<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:50px;">
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>Tên danh mục</th>
        <th>Mô tả</th>
        <th class="text-center" style="width:100px;">Hành động</th>
    </tr>
    </thead>
    <tbody>
        @if(isset($productCatalogues) && is_object($productCatalogues))
            @foreach($productCatalogues as $productCatalogue)
            <tr >
                <td>
                    <input type="checkbox" value="{{ $productCatalogue->id }}" class="input-checkbox checkBoxItem">
                </td>
               
                <td>
                    {{$productCatalogue->name }}
                </td>
                <td>
                    {{$productCatalogue->description }}
                </td>
                </td>
                <td class="text-center"> 
                    <a href="{{ route('product.catalogue.edit', $productCatalogue->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('product.catalogue.delete', $productCatalogue->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $productCatalogues->links('pagination::bootstrap-4') }}
