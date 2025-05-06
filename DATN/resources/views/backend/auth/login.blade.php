<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản trị viên</title>

    <link href="http://127.0.0.1:8000/backend/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/backend/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/backend/css/animate.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/backend/css/style.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/backend/css/customize.css" rel="stylesheet">
</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">
            <div class="col-md-6">
                <h2 class="font-bold">Hệ thống quản trị</h2>

                <p>Đăng nhập để truy cập khu vực quản trị viên.</p>
                <p>Quản lý nội dung, đơn hàng và người dùng một cách hiệu quả.</p>
                <p>Bảo mật cao, hỗ trợ đầy đủ các tính năng cần thiết.</p>
                <p><small>Chỉ dành cho quản trị viên hệ thống.</small></p>
            </div>

            <div class="col-md-6">
                <div class="ibox-content">

                    <!-- Hiển thị thông báo -->
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="post" class="m-t" role="form" action="{{ route('auth.login') }}">
                        @csrf
                        <div class="form-group">
                            <input 
                                type="text" 
                                name="email"
                                class="form-control" 
                                placeholder="Email quản trị viên" 
                                value="{{ old('email') }}"
                            >
                            @if ($errors->has('email'))
                                <span class="error-message text-danger">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input 
                                type="password" 
                                name="password"
                                class="form-control" 
                                placeholder="Mật khẩu" 
                            >
                            @if ($errors->has('password'))
                                <span class="error-message text-danger">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập quản trị</button>

                        {{-- <a href="#">
                            <small>Quên mật khẩu?</small>
                        </a> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
