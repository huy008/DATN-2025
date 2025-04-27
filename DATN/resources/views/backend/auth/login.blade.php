<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập quản trị</title>

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
                <h2 class="font-bold">Chào mừng đến với hệ thống quản trị</h2>

                <p>
                    Giao diện quản trị được thiết kế hiện đại và chuyên nghiệp với nhiều tính năng tiện ích.
                </p>

                <p>
                    Hệ thống giúp bạn quản lý nội dung một cách dễ dàng và hiệu quả.
                </p>

                <p>
                    Nền tảng đáng tin cậy cho các website chuyên nghiệp.
                </p>

                <p>
                    <small>Luôn sẵn sàng hỗ trợ và phát triển trong tương lai.</small>
                </p>
            </div>

            <div class="col-md-6">
                <div class="ibox-content">

                    <!-- Hiển thị thông báo lỗi -->
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
                                placeholder="Email" 
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

                        <button type="submit" class="btn btn-primary block full-width m-b">Đăng nhập</button>

                        <a href="#">
                            <small>Quên mật khẩu?</small>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
