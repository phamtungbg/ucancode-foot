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
        $user->password=bcrypt($r->password);
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
        $user = User::where('email',$r->email)->first();

        if($user){
            $password = Str::random(10);

            $user->password =  bcrypt($password);
            $user->save();
            $data['password'] = $password;
            Mail::send('backend.mail.mail', $data, function ($message) use ($user) {
                $message->from('dkmcnm@gmail.com', 'UCANCODE vegefoot');
                $message->to($user->email, 'Thành viên');
                $message->subject('Lấy lại mật khẩu');

            });
            return redirect('forget-password')->with('thongBao','Password mới sẽ được gửi vào email đăng ký của bạn!');
        }else{
            return redirect('forget-password')->withErrors(['email'=>'email không tồn tại']);
        }

    }
}
