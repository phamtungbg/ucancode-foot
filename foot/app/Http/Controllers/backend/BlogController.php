<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        echo 'Tin tức';
    }
    function themTinTuc() {
        echo 'Thêm Tin tức';
    }
    function suaTinTuc() {
        echo 'Sửa tin tức';
    }
}
