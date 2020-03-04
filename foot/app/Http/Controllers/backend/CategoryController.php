<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function danhMuc() {
        echo 'Danh mục';
    }
    function suaDanhMuc() {
        echo 'Sửa danh mục';
    }
}
