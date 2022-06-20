<?php

namespace App\Http\Controllers\vendor\admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use liondev\setting_admin\function\image;

class authController extends Controller
{
    public function index()
    {
        return view('vendor.admin.login');
    }

    public function checkLogin(Request $request)
    {
        // return back()->with('error', 'The error message here!');
        $checkValidate = $request->validate([
            'email'=> 'required|email',
            'password'=> 'required|min:6',
        ]);
        $arrayAuth = $request->only(['email', 'password']);
        if (Auth::attempt($arrayAuth)) {
            return redirect()->route('admin_home');
        } else {
            return back()->with('error', 'Tài khoản hoặc mật khẩu sai');
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('admin_login');
    }

    public function info()
    {
        return view('vendor.admin.info-account');
    }

    public function updateImgae(Request $request)
    {
        if(!$request->hasFile('img')) {
            return back()->with('error_img', 'Tải ảnh thất bại');
        }
        $img = new image();
        $nameImg = $img->Update($request->file('img'),Auth::user()->img);
        User::where('id',Auth::user()->id)->update(['img' => $nameImg]);
        return back();
    }

    public function updateInfo(Request $request)
    {
        $checkValidate = $request->validate([
            'email'=> 'required|email',
            'name'=> 'required',
        ]);

        User::where('id',Auth::user()->id)->update(['name' => $request->name, 'email'=>$request->email]);
        return back();
    }

    public function updatePass(Request $request)
    {
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            return redirect()->back()->with("error","Mật khẩu không chính xác.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            return redirect()->back()->with("error-new","Mật khẩu mới không được phép giống với mật khẩu hiện tại.");
        }

        if($request->get('retype-password') != $request->get('new-password'))
        {
            return redirect()->back()->with("error-retype","Mật khẩu mật khẩu nhập lại không trùng khớp.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:6',
            'retype-password' => 'required|string|min:6',
        ]);


        User::where('id',Auth::user()->id)->update(['password' => bcrypt($request->get('new-password'))]);
        return redirect()->route('admin_logout');
    }
}
