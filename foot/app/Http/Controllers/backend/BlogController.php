<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        return view('backend.blog.blog');
    }
    function themTinTuc() {
        return view('backend.blog.addblog');
    }
    function suaTinTuc() {
        return view('backend.blog.editblog');
    }
}
