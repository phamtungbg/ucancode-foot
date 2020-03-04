<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function danhMuc() {
        return view('backend.category.category');
    }
    function suaDanhMuc() {
        return view('backend.category.editcategory');
    }
}
