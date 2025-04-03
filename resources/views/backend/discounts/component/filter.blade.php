<form action="{{ route('attribute.index') }}">
    <div class="filter-wrapper">
        <div class="uk-flex uk-flex-middle uk-flex-space-between">
            @include('backend.dashboard.component.perpage')
            <div class="action">
                <div class="uk-flex uk-flex-middle">
                    @include('backend.dashboard.component.keyword')
                    <a href="{{ route('discounts.create') }}" class="btn btn-danger"><i class="fa fa-plus mr5"></i>Thêm khuyến mãi</a>
                </div>
            </div>
        </div>
    </div>
</form>

