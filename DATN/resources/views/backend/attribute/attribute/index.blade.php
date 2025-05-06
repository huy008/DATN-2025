@include('backend.dashboard.component.breadcrumb', ['title' => "Loại thuộc tính"])
<div class="row mt20">
    <div class="col-lg-12">
             <div class="ibox-title">
                {{-- @include('backend.dashboard.component.toolbox', ['model' => 'ProductCatalogue']) --}}
            </div>
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                @include('backend.attribute.attribute.component.filter')
                @include('backend.attribute.attribute.component.table')
            </div>
        </div>
    </div>
</div>

