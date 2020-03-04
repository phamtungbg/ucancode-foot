<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function trangChu() {
        echo 'Trang chủ';
    }
    function thongTin() {
        echo 'Thông tin';
    }
    function lienHe() {
        echo 'Liên hệ';
    }
}
