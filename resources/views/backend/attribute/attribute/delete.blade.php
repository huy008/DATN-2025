@include('backend.dashboard.component.formError')
<form action="{{ route('attribute.destroy', $attribute->id) }}" method="post" class="box">
   @include('backend.dashboard.component.destroy', ['model' => $attribute])
</form>
