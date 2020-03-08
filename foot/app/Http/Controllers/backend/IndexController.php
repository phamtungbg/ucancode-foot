<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\models\don_hang;
use Illuminate\Http\Request;
use Carbon\Carbon;

class IndexController extends Controller
{
    function admin() {
        $thangHt = Carbon::now()->format('m');
        $namHt = Carbon::now('Y');
        $data['thang'] = $thangHt;
        $data['donHang'] = don_hang::whereMonth('updated_at', $thangHt)->whereYear('updated_at',$namHt);

        for ($i=1; $i <= $thangHt; $i++) {
            $data['doanhThu']['Tháng '.$i] = don_hang::whereMonth('updated_at', $i)->whereYear('updated_at',$namHt)->sum('tong_tien');
        }
        return view('backend.index',$data);
    }
}
