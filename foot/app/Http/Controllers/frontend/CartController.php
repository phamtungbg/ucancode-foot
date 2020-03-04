<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        echo 'Giỏ hàng';
    }
    function thanhToan() {
        echo 'Thanh toán';
    }
}
