<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\models\danh_muc;
use App\models\tin_tuc;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function tinTuc(request $r) {
        if ($r->tuKhoa!='') {
            $data['tinTuc'] = tin_tuc::where('link_anh','<>','no-img.jpg')->where('tieu_de','like','%'.$r->tuKhoa.'%')->get();
        } else {
            $data['tinTuc'] = tin_tuc::where('link_anh','<>','no-img.jpg')->get();
        }


        $data['danhMuc'] = danh_muc::where('loai_danh_muc',1)->where('id_cha','<>',0)->get();
        $data['ttMoi'] = tin_tuc::where('link_anh','<>','no-img.jpg')->orderBy('created_at','desc')->take(3)->get();
        return view('frontend.blog.blog',$data);
    }
    function tinTucDm($slugDm){
        $mang = explode('-',$slugDm);
        $idDm = array_pop($mang);
        $data['tinTuc'] = tin_tuc::where('danh_muc_id',$idDm)->where('link_anh','<>','no-img.jpg')->get();
        $data['danhMuc'] = danh_muc::where('loai_danh_muc',1)->where('id_cha','<>',0)->get();
        $data['ttMoi'] = tin_tuc::where('link_anh','<>','no-img.jpg')->orderBy('created_at','desc')->take(3)->get();
        return view('frontend.blog.blog',$data);
    }

    function ctTinTuc($slugTt,$idDm) {
        $mang = explode('-',$slugTt);
        $idDm = array_pop($mang);
        $data['tinTuc'] = tin_tuc::find($idDm);
        $data['danhMuc'] = danh_muc::where('loai_danh_muc',1)->where('id_cha','<>',0)->get();
        $data['ttMoi'] = tin_tuc::where('link_anh','<>','no-img.jpg')->orderBy('created_at','desc')->take(3)->get();
        return view('frontend.blog.blog-single',$data);
    }
}
