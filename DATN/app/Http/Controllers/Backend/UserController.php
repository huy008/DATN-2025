<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;
    protected $provinceRepository;
    protected $userRepository;

    public function __construct(
        UserService $userService,
        UserRepository $userRepository,
    ) {
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        $users = $this->userService->paginate($request);

        $config = [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'model' => 'User'
        ];
        $template = 'backend.user.user.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users'
        ));
    }

    public function create()
    {
        $config = $this->config();
        $config['method'] = 'create';
        $template = 'backend.user.user.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . ($user->id ?? 'NULL') . '|max:255', // Kiểm tra email là duy nhất và có định dạng hợp lệ
            'name' => 'required|string|max:255', // Kiểm tra họ tên không trống và không quá 255 ký tự
            'address' => 'nullable|string|max:255', // Địa chỉ có thể rỗng, nếu có thì phải là chuỗi
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|max:15', // Kiểm tra số điện thoại hợp lệ (regex có thể tùy chỉnh theo yêu cầu)
            'password' => 'nullable|min:8|confirmed', // Mật khẩu cần tối thiểu 8 ký tự và phải trùng với trường xác nhận mật khẩu
            'password_confirmation' => 'nullable',
        ], [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'name.required' => 'Họ tên không được để trống.',
            'name.string' => 'Họ tên phải là chuỗi ký tự.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu không khớp.',
        ]);
        if ($this->userService->create($request)) {
            return redirect()->route('user.index')->with('success', 'Thêm mới bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Thêm mới bản ghi không thành công. Hãy thử lại');
    }

    public function edit($id)
    {
        $user = $this->userRepository->findById($id);
        $config = $this->config();
        $config['method'] = 'edit';
        $template = 'backend.user.user.store';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'user',
        ));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email,' . ($user->id ?? 'NULL') . '|max:255', // Kiểm tra email là duy nhất và có định dạng hợp lệ
            'name' => 'required|string|max:255', // Kiểm tra họ tên không trống và không quá 255 ký tự
            'address' => 'nullable|string|max:255', // Địa chỉ có thể rỗng, nếu có thì phải là chuỗi
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|max:15', // Kiểm tra số điện thoại hợp lệ (regex có thể tùy chỉnh theo yêu cầu)
        ], [
            'email.required' => 'Email không được để trống.',
            'email.email' => 'Email không hợp lệ.',
            'email.unique' => 'Email đã tồn tại.',
            'name.required' => 'Họ tên không được để trống.',
            'name.string' => 'Họ tên phải là chuỗi ký tự.',
            'address.string' => 'Địa chỉ phải là chuỗi ký tự.',
            'phone.regex' => 'Số điện thoại không hợp lệ.',
            'phone.max' => 'Số điện thoại không được vượt quá 15 ký tự.',
        ]);
        if ($this->userService->update($id, $request)) {
            return redirect()->route('user.index')->with('success', 'Cập nhật bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Cập nhật bản ghi không thành công. Hãy thử lại');
    }

    public function delete($id)
    {
        $config['seo'] = config('apps.user');
        $user = $this->userRepository->findById($id);
        $template = 'backend.user.user.delete';
        return view('backend.dashboard.layout', compact(
            'template',
            'user',
            'config',
        ));
    }

    public function destroy($id)
    {
        if ($this->userService->destroy($id)) {
            return redirect()->route('user.index')->with('success', 'Xóa bản ghi thành công');
        }
        return redirect()->route('user.index')->with('error', 'Xóa bản ghi không thành công. Hãy thử lại');
    }

    private function config()
    {
        return [
            'css' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'
            ],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js',
                'backend/plugins/ckfinder_2/ckfinder.js',
                'backend/library/finder.js',

            ]
        ];
    }
}
