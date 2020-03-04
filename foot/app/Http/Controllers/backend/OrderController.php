<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function donHang() {
        echo 'Đơn hàng';
    }
    function ctDonHang() {
        echo 'Chi tiết đơn hàng';
    }
}
