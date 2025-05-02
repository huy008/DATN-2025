@extends('layout.main')

@section('content')
<style>
    .forgot-password-container {
        max-width: 450px;
        margin: 60px auto;
        background-color: #f8f9fa;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    .forgot-password-container h2 {
        margin-bottom: 20px;
        text-align: center;
        font-weight: 600;
        color: #343a40;
    }
    .form-group label {
        font-weight: 500;
    }
    .btn-primary {
        width: 100%;
        padding: 10px;
        font-weight: 600;
    }
</style>

<div class="container">
    <div class="forgot-password-container">
        <h2>Quên mật khẩu</h2>
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group mb-3">
                <label for="email">Email của bạn</label>
                <input type="email" class="form-control" name="email" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button type="submit" class="btn btn-primary">Gửi liên kết đặt lại mật khẩu</button>
        </form>
    </div>
</div>
@endsection
