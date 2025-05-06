@extends('layout.main')

@section('content')
<style>
    .reset-password-container {
        max-width: 450px;
        margin: 60px auto;
        background-color: #f8f9fa;
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .reset-password-container h2 {
        text-align: center;
        margin-bottom: 24px;
        color: #343a40;
        font-weight: 600;
    }

    .form-group label {
        font-weight: 500;
        margin-bottom: 6px;
    }

    .btn-success {
        width: 100%;
        padding: 10px;
        font-weight: 600;
    }
</style>

<div class="container">
    <div class="reset-password-container">
        <h2>Đặt lại mật khẩu</h2>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group mb-3">
                <label for="password">Mật khẩu mới</label>
                <input type="password" name="password" class="form-control" required>
                @error('password') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="form-group mb-4">
                <label for="password_confirmation">Xác nhận mật khẩu</label>
                <input type="password" name="password_confirmation" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Đặt lại mật khẩu</button>
        </form>
    </div>
</div>
@endsection
