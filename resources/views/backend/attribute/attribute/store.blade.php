@include('backend.dashboard.component.formError')
@php
    $url = $config['method'] == 'create' ? route('attribute.store') : route('attribute.update', $attribute->id);
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
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label for=""
                                        class="control-label text-left">{{ __('messages.title') }}<span
                                            class="text-danger">(*)</span></label>
                                    <input type="text" name="name"
                                        value="{{ old('name', $attribute->name ?? '') }}" class="form-control"
                                        placeholder="" autocomplete="off" {{ isset($disabled) ? 'disabled' : '' }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.dashboard.component.button')
    </div>
</form>
