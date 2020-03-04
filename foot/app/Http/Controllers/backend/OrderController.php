<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function donHang() {
        return view('backend.order.order');
    }
    function ctDonHang() {
        return view('backend.order.detailorder');
    }
}
