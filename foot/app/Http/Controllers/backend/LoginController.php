<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function dangNhap() {
        return view('backend.login.login');
    }
    function postDangNhap(LoginRequest $r) {
       dd($r->all());
    }
}
