<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function sanPham() {
        echo 'Sản phẩm';
    }
    function themSanPham() {
        echo 'Thêm sản phẩm';
    }
    function suaSanPham() {
        echo 'Sửa sản phẩm';
    }
}
