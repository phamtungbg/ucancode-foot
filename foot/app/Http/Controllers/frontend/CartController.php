<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use Illuminate\Http\Request;

class CartController extends Controller
{
    function gioHang() {
        return view('frontend.cart.cart');
    }
    function thanhToan() {
        return view('frontend.cart.checkout');
    }
    function postThanhToan(CheckoutRequest $r) {
        dd($r->all());
    }
}
