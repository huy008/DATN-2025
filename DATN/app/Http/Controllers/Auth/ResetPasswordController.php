<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\PasswordResetToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ResetPasswordController extends Controller
{
    public function showResetForm($token)
    {
        $resetToken = PasswordResetToken::whereToken($token)->firstOrFail();
        return view('auth.reset-password',compact('token'));
    }

    public function reset(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed',
        ], [
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);

        $resetToken = PasswordResetToken::whereToken($request->token)->firstOrFail();

        $user = $resetToken->user;

        $data = [
            'password' => Hash::make($request->input('password'))
        ];

        $user->update($data);

        // Auth::guard('web')->login($user);

        toastr()->success('Lấy lại mật khảu thành công', 'Thành công', ['timeOut' => 2000]);

        return redirect()->route('login');
    }
}
