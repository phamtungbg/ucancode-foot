<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function sanPham() {
        return view('backend.product.listproduct');
    }
    function themSanPham() {
        return view('backend.product.addproduct');
    }
    function suaSanPham() {
        return view('backend.product.addproduct');
    }
}
