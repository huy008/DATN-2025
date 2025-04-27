@extends('layout.main')

@section('content')
    <section class="profile__area pt-60 pb-120">
        <div class="container">
            <div class="profile__inner p-relative">
                <div class="row">
                    <div class="col-xxl-12 col-lg-8">
                        <div class="profile__tab-content">
                            <ul class="nav nav-tabs nav-fill" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link active" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="true">Thông tin cá nhân</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="{{ route('profile.getChangePassword') }}" class="nav-link" role="tab"
                                        aria-controls="change-password-tab-pane" aria-selected="false">Đổi mật khẩu</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active pt-4" role="tabpanel">
                                    <!-- Hiển thị thông báo lỗi -->
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                               <ul style="list-style-type: none; padding-left: 0;">
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form method="POST" action="{{ route('profile.update') }}" accept-charset="UTF-8"
                                        id="botble-ecommerce-forms-fronts-customer-customer-form"
                                        class="js-base-form dirty-check" novalidate="novalidate"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="name">Tên</label>
                                            <input class="form-control" data-counter="250" name="name" type="text"
                                                value="{{ old('name', $user->name) }}" id="name">
                                        </div>

                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="phone">Số điện thoại</label>
                                            <input class="form-control" id="phone"
                                                value="{{ old('phone', $user->phone) }}" name="phone" type="text">
                                        </div>

                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="email">Email</label>
                                            <input class="form-control" data-counter="60"
                                                placeholder="e.g: example@domain.com" disabled="" name="email"
                                                type="email" value="{{ old('email', $user->email) }}" id="email">
                                        </div>

                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="address">Địa chỉ</label>
                                            <input class="form-control" data-counter="250" name="address" type="text"
                                                value="{{ old('address', $user->address) }}" id="address">
                                        </div>

                                        <div class="mb-3 position-relative">
                                            <label class="form-label" for="img_thumbnail">Ảnh đại diện</label>
                                            <input type="file" name="img_thumbnail" class="form-control">

                                            @if ($user->img_thumbnail)
                                                <img src="{{ asset($user->img_thumbnail) }}" alt="Avatar" class="mt-2"
                                                    style="width: 100px; height: 100px;">
                                            @endif
                                        </div>

                                        <button class="btn btn-primary" type="submit">Cập nhật</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
