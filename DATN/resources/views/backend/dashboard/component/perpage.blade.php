<div class="perpage">
    @php
        $perpage = request('perpage') ?: old('perpage');
    @endphp
    <div class="uk-flex uk-flex-middle uk-flex-space-between">
        <select name="perpage" class="form-control input-sm perpage filter mr10">
            @for($i = 10; $i<= 100; $i+=10)
            <option {{ ($perpage == $i)  ? 'selected' : '' }}  value="{{ $i }}">{{ $i }} {{ __('messages.perpage') }}</option>
            @endfor
        </select>
    </div>
</div>