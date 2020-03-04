<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function cuaHang() {
        echo 'Cửa hàng';
    }
    function ctSanPham() {
        echo 'Chi tiết sản phẩm';
    }
    function spUaThich() {
        echo 'Sản phẩm ưa thích';
    }
}
