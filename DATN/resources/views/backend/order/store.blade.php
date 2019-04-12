@include('backend.dashboard.component.breadcrumb', ['title' => "Đơn hàng"])
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@php
    $url = ($config['method'] == 'create') ? route('order.store') : route('order.update', $order->id);
@endphp
<form action="{{ $url }}" method="post" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Thông tin chung</div>
                    <div class="panel-description">
                        <p>Nhập thông tin chung của quyền</p>
                        <p>Lưu ý: Những trường đánh dấu <span class="text-danger">(*)</span> là bắt buộc</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb15">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Mã đơn hàng<span class="text-danger">(*)</span></label>
                                    <input 
                                    readonly
                                        type="text"
                                        name="name"
                                        value="{{ old('name', ($order->id) ?? '' ) }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Khách hàng<span class="text-danger">(*)</span></label>
                                    <input 
                                    readonly
                                        type="text"
                                        name="canonical"
                                        value="{{ old('canonical', ($order->user->name) ?? '' ) }}"
                                        class="form-control"
                                        placeholder=""
                                        autocomplete="off"
                                    >
                                </div>
                            </div>
                        </div>
                         <div class="row mb15">
                            <div class="col-lg-9">
                                <div class="form-row">
                                    <label for="" class="control-label text-left">Trạng thái đơn hàng</label>
                                  <select name="status" class="form-control">
                                        <option value="pending" {{$order->status == "pending" ? 'selected' : ''}}>Chờ xác nhận</option>
                                        <option value="processing" {{$order->status == "processing" ? 'selected' : ''}}>Đang giao</option>
                                        <option value="completed" {{$order->status == "completed" ? 'selected' : ''}}>Đã giao</option>
                                        {{-- <option value="cancelled" {{$order->status == "cancelled" ? 'selected' : ''}}>Hủy đơn hàng</option> --}}
                                  </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="text-right mb15">
            <button class="btn btn-primary" type="submit" name="send" value="send">Lưu lại</button>
        </div>
    </div>
</form>
