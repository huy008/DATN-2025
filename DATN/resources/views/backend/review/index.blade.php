
@include('backend.dashboard.component.breadcrumb', ['title' => "Đánh giá"])
<div class="row mt20">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
              <div class="ibox-title">
            </div>
            <div class="ibox-content">
                @include('backend.review.component.filter')
                @include('backend.review.component.table')
            </div>
        </div>
    </div>
</div>

