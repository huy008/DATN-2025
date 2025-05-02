<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => [
                'required',
                'regex:/^0[0-9]{9}$/',
            ],
            'address' => 'nullable|string|max:255',
            'img_thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ], [
            'name.required' => 'Tên là bắt buộc.',
            'name.string' => 'Tên phải là một chuỗi ký tự.',
            'name.max' => 'Tên không được vượt quá 255 ký tự.',

            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.regex' => 'Số điện thoại không đúng định dạng.',

            'address.string' => 'Địa chỉ phải là một chuỗi ký tự.',
            'address.max' => 'Địa chỉ không được vượt quá 255 ký tự.',

            'img_thumbnail.image' => 'Ảnh đại diện phải là một hình ảnh.',
            'img_thumbnail.mimes' => 'Ảnh đại diện phải có định dạng: jpeg, png, jpg, gif, svg.',
            'img_thumbnail.max' => 'Ảnh đại diện không được vượt quá 2MB.',
        ]);

        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->address = $request->input('address');

        // Xử lý ảnh đại diện (nếu có)
        if ($request->hasFile('img_thumbnail')) {
            $image = $request->file('img_thumbnail');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/avatars'), $imageName);
            $user->img_thumbnail = 'uploads/avatars/' . $imageName;
        }

        $user->save();
        toastr()->success('Thông tin cá nhân đã được cập nhật.', 'Thành công', ['timeOut' => 2000]);
        return redirect()->route('profile.index');
    }

    public function getChangePassword()
    {
        return view('profile.changePassword');
    }

    public function changePassword(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'old_password' => 'required',
            'password' => 'required|min:6|confirmed',
        ], [
            'old_password.required' => 'Mật khẩu hiện tại là bắt buộc.',
            'password.required' => 'Mật khẩu mới là bắt buộc.',
            'password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp với mật khẩu mới.',
        ]);

        if (!Hash::check($request->input('old_password'), $user->password)) {
            return back()->with('error', 'Mật khẩu cũ không đúng.');
        }

        $user->password = bcrypt($request->input('password'));
        $user->save();
        toastr()->success('Đổi mật khẩu thành công.', 'Thành công', ['timeOut' => 2000]);
        return redirect()->back();
    }
}
