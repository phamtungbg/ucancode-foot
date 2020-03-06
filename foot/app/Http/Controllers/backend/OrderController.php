<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\don_hang;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function donHang() {
        $data['donHang'] = don_hang::all();
        return view('backend.order.order',$data);
    }
    function ctDonHang($idDonHang) {
        $data['donHang'] = don_hang::find($idDonHang);
        return view('backend.order.detailorder',$data);
    }
}
