<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\models\san_pham;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function trangChu() {
        $data['spNb'] = san_pham::where('link_anh','<>','no-img.jpg')->where('noi_bat',1)->take(8)->get();
        return view('frontend.index',$data);
    }
    function thongTin() {
        return view('frontend.about');
    }
    function lienHe() {
        return view('frontend.contact');
    }
}
