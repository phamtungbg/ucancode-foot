<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        return view('frontend.blog.blog');
    }
    function ctTinTuc() {
        return view('frontend.blog.blog-single');
    }
}
