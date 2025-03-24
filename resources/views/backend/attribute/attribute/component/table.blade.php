
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th style="width:50px;">
            <input type="checkbox" value="" id="checkAll" class="input-checkbox">
        </th>
        <th>{{ __('messages.tableName') }}</th>
        <th class="text-center" style="width:100px;">{{ __('messages.tableAction') }}</th>
    </tr>
    </thead>
    <tbody>
        @if(isset($attributes) && is_object($attributes))
            @foreach($attributes as $attribute)
            <tr id="{{ $attribute->id }}">
                <td>
                    <input type="checkbox" value="{{ $attribute->id }}" class="input-checkbox checkBoxItem">
                </td>
                <td>
                    <div class="uk-flex uk-flex-middle">
                        <div class="main-info">
                            <div class="name"><span class="maintitle">{{ $attribute->name }}</span></div>                      
                        </div>
                    </div>
                </td>
                </td>
                <td class="text-center"> 
                    <a href="{{ route('attribute.edit', $attribute->id) }}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                    <a href="{{ route('attribute.delete', $attribute->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        @endif
    </tbody>
</table>
{{  $attributes->links('pagination::bootstrap-4') }}
