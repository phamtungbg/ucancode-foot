<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc() {
        echo 'Tin tức';
    }
    function ctTinTuc() {
        echo 'Chi tiết tin tức';
    }
}
