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
                                    <a href="{{ route('profile.index') }}" class="nav-link" role="tab"
                                        aria-controls="profile-tab-pane" aria-selected="false">Thông tin cá nhân</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link active" role="tab"
                                        aria-controls="change-password-tab-pane" aria-selected="true">Đổi mật khẩu</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active pt-4" role="tabpanel">
                                    <form method="POST" action="{{ route('profile.changePassword') }}"
                                        accept-charset="UTF-8" id="botble-ecommerce-forms-fronts-auth-change-password-form"
                                        class="js-base-form dirty-check" novalidate="novalidate">
                                        @csrf

                                        <!-- Thông báo lỗi -->
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                    <ul style="list-style-type: none; padding-left: 0;">
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <!-- Current Password -->
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="old_password">Mật khẩu hiện
                                                tại</label>
                                            <div class="input-group">
                                                <input type="password" name="old_password" id="old_password" value=""
                                                    class="form-control" data-counter="250" placeholder="Mật khẩu hiện tại"
                                                    required="required" data-bb-password="" aria-required="true">
                                            </div>
                                        </div>

                                        <!-- New Password -->
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="password">Mật khẩu
                                                mới</label>
                                            <div class="input-group">
                                                <input type="password" name="password" id="password" value=""
                                                    class="form-control" data-counter="250" placeholder="Mật khẩu mới"
                                                    required="required" data-bb-password="" aria-required="true">
                                            </div>
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mb-3 position-relative">
                                            <label class="form-label form-label required" for="password_confirmation">Xác
                                                nhận mật khẩu</label>
                                            <div class="input-group">
                                                <input type="password" name="password_confirmation"
                                                    id="password_confirmation" value="" class="form-control"
                                                    data-counter="250" placeholder="Xác nhận mật khẩu" required="required"
                                                    data-bb-password="" aria-required="true">
                                            </div>
                                        </div>

                                        <!-- Submit Button -->
                                        <button class="btn btn-primary" type="submit">Đổi mật khẩu</button>
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
