<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đặt lại mật khẩu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f6f6f6;
            color: #333;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .btn {
            display: inline-block;
            background-color: #007BFF;
            color: white !important;
            padding: 12px 24px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Xin chào!</h2>
    <p>Bạn đã yêu cầu đặt lại mật khẩu cho tài khoản của mình tại <strong>Điện Thoại Hay</strong>.</p>
    <p>Vui lòng nhấn vào nút bên dưới để thiết lập mật khẩu mới:</p>

    <a href="{{ route('password.reset',$token) }}" class="btn">Đặt lại mật khẩu</a>

    <p>Nếu bạn không thực hiện yêu cầu này, bạn có thể bỏ qua email này.</p>

    <div class="footer">
        &copy; {{ date('Y') }} dienthoaihay.vn
    </div>
</div>
</body>
</html>
