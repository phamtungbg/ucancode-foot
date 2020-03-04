<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        return view('frontend.cart.cart');
    }
    function thanhToan() {
        return view('frontend.cart.checkout');
    }
}
