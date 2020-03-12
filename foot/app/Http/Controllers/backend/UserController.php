<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChangePasswordRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function dsThanhVien(){
        $data['user'] = User::where('trang_thai',1)->paginate(3);
        return view('backend.user.listuser',$data);
    }

    function dsDangKy(){
        $data['user'] = User::where('trang_thai',0)->paginate(3);
        return view('backend.user.register-user',$data);
    }

    function doiMatKhau($idUser){
        return view('backend.user.change-password');
    }
    function postDoiMatKhau($idUser,ChangePasswordRequest $r){
        $user = User::find($idUser);

        if (Hash::check($r->password, $user->password)) {
            $user->password = bcrypt($r->new_password);
            $user->save();
            return redirect('/admin/user')->with('thongBao','Đã thay đổi mật khẩu thành công');
        } else {
           return redirect()->back()->withErrors(['password'=>'Mật khẩu không chính xác']);
        }

    }

    function delThanhVien($idUser){
        $data['user'] = User::find($idUser)->delete();
        return redirect('/admin/user')->with('thongBao','Đã xóa thành công');

    }
    function chapNhan($idUser){
        $user = User::find($idUser);
        $user->trang_thai = 1;
        $user->save();
        return redirect('/admin/user')->with('thongBao','Đã chấp nhận thành viên mới');
    }
}
