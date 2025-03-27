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
            return redirect()->intended('/')->with('success', ['Login thành công']);
        }
        return redirect()->route('login')->with(['error' => ['Tài khoản mật khẩu không chính xác !!!'], 'email' => $credentials['email']]);
    }

    public function logout()
    {
        Session::flush();
        Auth::guard('web')->logout();
        return redirect()->route('login');
    }

    public function index()
    {
        return view('register');
    }

    public function register(Request $request)
    {
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
