
@include('backend.dashboard.component.breadcrumb', ['title' => "Khách hàng"])
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
            </div>
            <div class="ibox-content">
                @include('backend.user.user.component.filter')
                @include('backend.user.user.component.table')
            </div>
        </div>
    </div>
</div>

