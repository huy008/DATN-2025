<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPassword;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

       $user = User::where('email',$request->email)->first();

       $token = Str::random(40);

        $tokenData = [
            'email' => $request->email,
            'token' => $token
        ];
        PasswordResetToken::where('email', $request->email)->delete();

        if(PasswordResetToken::create($tokenData))
        {
            Mail::to($request->email)->send(new ForgotPassword($user,$token));
            return redirect()->back();
        }
        toastr()->success('Gửi email thành công', 'Thành công', ['timeOut' => 2000]);

        return redirect()->back();
    }
}
