<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:50px;">
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>{{ __('messages.tableName') }}</th>
        <th class="text-center" style="width:100px;">{{ __('messages.tableAction') }} </th>
    </tr>
    </thead>
    <tbody>
        @if(isset($attributeCatalogues) && is_object($attributeCatalogues))
            @foreach($attributeCatalogues as $attributeCatalogue)
            <tr >
                <td>
                    <input type="checkbox" value="{{ $attributeCatalogue->id }}" class="input-checkbox checkBoxItem">
                </td>
               
                <td>            <div class="uk-flex uk-flex-middle">
                        <div class="main-info">
                            <div class="name"><span class="maintitle">{{ $attributeCatalogue->value }}</span></div>                      
                        </div>
                    </div></td>
                <td class="text-center"> 
                    <a href="{{ route('attribute.value.edit', $attributeCatalogue->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('attribute.value.delete', $attributeCatalogue->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $attributeCatalogues->links('pagination::bootstrap-4') }}
