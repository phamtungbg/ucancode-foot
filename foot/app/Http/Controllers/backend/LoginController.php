<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;
use Auth;

class LoginController extends Controller
{
    function dangNhap() {
        return view('backend.login.login');
    }
    function postDangNhap(LoginRequest $r) {
    //    dd($r->all());
        $email = $r->email;
        $password = $r->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/admin');
        } else {
            return redirect()->back()->withInput()->withErrors(["email"=>"Email hoặc password không chính xác"]);
        }

    }
    function dangXuat() {
        Auth::logout();
        return redirect('/login');
    }

    function dangKy(){
        return view('backend.login.register');
    }
    function postDangKy(RegisterRequest $r){
        $user = new User;
        $user->email=$r->email;
        $user->password=$r->password;
        $user->ho_ten=$r->ho_ten;
        $user->quyen = 0;
        $user->trang_thai=0;
        $user->save();
        return redirect('login')->with('thongBao','Bạn đã đăng ký thành công hãy chờ người kiểm duyệt xác nhận');
    }


    function quenMatKhau(){
        return view('backend.login.forget-password');
    }

    function postQuenMatKhau(Request $r){
       

    }
}
