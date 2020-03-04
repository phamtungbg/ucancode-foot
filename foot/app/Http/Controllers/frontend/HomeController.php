<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function trangChu() {
        return view('frontend.index');
    }
    function thongTin() {
        return view('frontend.about');
    }
    function lienHe() {
        return view('frontend.contact');
    }
}
