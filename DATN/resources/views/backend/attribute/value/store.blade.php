@include('backend.dashboard.component.formError')
@php
    $url =
        $config['method'] == 'create'
            ? route('attribute.value.store')
            : route('attribute.value.update', $attributeCatalogue->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-9">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>{{ __('messages.tableHeading') }}</h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-12 mb15">
                                <div class="form-row">
                                    <label for=""
                                        class="control-label text-left">{{ __('messages.title') }}<span
                                            class="text-danger">(*)</span></label>
                                    <select name="attribute_id" id="{{ __('messages.title') }}" class="form-control">
                                        @foreach ($attributes as $attribute)
                                            <option value="{{ $attribute->id }}">{{ $attribute->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-12">

                                <div class="form-row">
                                    <label for=""
                                        class="control-label text-left">{{ __('messages.title') }}<span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="value"
                                        value="{{ old('value', $attribute->name ?? '') }}" class="form-control"
                                        placeholder="" autocomplete="off" {{ isset($disabled) ? 'disabled' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                {{-- @include('backend.attribute.catalogue.component.aside') --}}
            </div>
        </div>
        @include('backend.dashboard.component.button')
    </div>
</form>
