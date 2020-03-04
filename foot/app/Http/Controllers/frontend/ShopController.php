<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    function cuaHang() {
        return view('frontend.shop.shop');
    }
    function ctSanPham() {
        return view('frontend.shop.product-single');
    }
    function spUaThich() {
        return view('frontend.shop.wishlish');
    }
}
