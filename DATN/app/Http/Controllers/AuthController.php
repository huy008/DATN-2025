<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('web')->attempt($credentials)) {
            $notification = array(
                'message' => 'Login thành công',
                'alert-type' => 'success'
            );
            return redirect()->intended('/')->with($notification);
        }
        return redirect()->route('login')->with(['error' => 'Tài khoản mật khẩu không chính xác !!!', 'email' => $credentials['email']]);
    }

    public function logout()
    {
        session()->forget('cart');
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => [
                'required',
                'regex:/^0[0-9]{9}$/',
            ],
            'password' => 'required|string|min:6|confirmed',
        ], [
            'name.required' => 'Vui lòng nhập họ tên.',
            'name.string' => 'Họ tên phải là chuỗi ký tự.',
            'name.max' => 'Họ tên không được vượt quá 255 ký tự.',

            'email.required' => 'Vui lòng nhập email.',
            'email.email' => 'Email không đúng định dạng.',
            'email.unique' => 'Email đã được sử dụng.',

            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không đúng định dạng.',

            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.string' => 'Mật khẩu phải là chuỗi ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ]);

        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'password' => Hash::make($request->input('password'))
        ];

        $user = $this->userRepository->create($data);

        Auth::guard('web')->login($user);

        return redirect()->intended('/')->with('success', ['Login thành công']);
    }
}
