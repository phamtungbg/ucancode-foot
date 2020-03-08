<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddBlogRequest;
use App\Http\Requests\EditBlogRequest;
use App\models\danh_muc;
use App\models\tin_tuc;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;

class BlogController extends Controller
{
    function tinTuc(Request $r) {
        // dd($r->all());
        $data['tinTuc'] = tin_tuc::paginate(10);
        return view('backend.blog.blog',$data);
    }

    function themTinTuc() {
        $data['allDanhmuc'] = danh_muc::where('loai_danh_muc',1)->get();
        return view('backend.blog.addblog',$data);
    }
    function postThemTinTuc(AddBlogRequest $r){
        // dd($r->all());
        $tinTuc = new tin_tuc;
        $tinTuc->tieu_de=$r->tieu_de;
        $tinTuc->mo_ta=$r->mo_ta;
        $tinTuc->noi_dung=$r->noi_dung;
        $tinTuc->link_slug=Str::slug($r->tieu_de, '-');
        $tinTuc->the_tag=$r->the_tag;
        $tinTuc->danh_muc_id=$r->danh_muc;
        $tinTuc->thanh_vien_id=Auth::user()->id;
        $tinTuc->save();
        if ($r->hasFile('anh')) {
            $file = $r->anh;
            $tenFile='tin-tuc-'.$tinTuc->id.$file->getClientOriginalExtension();
            $tinTuc->link_anh = 'upload/'.$tenFile;
            $file->move('backend/upload',$tenFile);
        }else {
            $tinTuc->link_anh='upload/no-img.jpg';
        }
        $tinTuc->save();
        return redirect('/admin/blog')->with('thongBao','Đã thêm thành công');
    }

    function suaTinTuc($idTin) {
        $data['tinTuc'] = tin_tuc::find($idTin);
        $data['allDanhmuc'] = danh_muc::where('loai_danh_muc',1)->get();
        return view('backend.blog.editblog',$data);
    }
    function postSuaTinTuc(EditBlogRequest $r,$idTin){
        // dd($r->all());
        $tinTuc = tin_tuc::find($idTin);;
        $tinTuc->tieu_de=$r->tieu_de;
        $tinTuc->mo_ta=$r->mo_ta;
        $tinTuc->noi_dung=$r->noi_dung;
        $tinTuc->link_slug=Str::slug($r->tieu_de, '-');
        $tinTuc->the_tag=$r->the_tag;
        $tinTuc->danh_muc_id=$r->danh_muc;
        $tinTuc->thanh_vien_id=Auth::user()->id;
        if ($r->hasFile('anh')) {
            if ($tinTuc->link_anh!='upload/no-img.jpg') {
                unlink('backend/'.$tinTuc->link_anh);
            }
            $file = $r->anh;
            $tenFile='tin-tuc-'.$tinTuc->id.$file->getClientOriginalExtension();
            $tinTuc->link_anh = 'upload/'.$tenFile;
            $file->move('backend/upload',$tenFile);
        }
        $tinTuc->save();
        return redirect('/admin/blog')->with('thongBao','Đã sửa thành công');

    }

    function xoaTinTuc($idTin){
        $tinTuc = tin_tuc::find($idTin);
        if ($tinTuc->link_anh!='upload/no-img.jpg') {
            unlink('backend/'.$tinTuc->link_anh);
        }
        $tinTuc->delete();
        return redirect('/admin/blog')->with('thongBao','Đã xóa thành công');
    }
}
