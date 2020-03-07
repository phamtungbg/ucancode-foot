<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddProductRequest;
use App\Http\Requests\EditProductRequest;
use App\models\san_pham;
use Illuminate\Support\Str;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //list sp
    function sanPham() {
        $data['sanPham']= san_pham::paginate(4);
        return view('backend.product.listproduct',$data);
    }
    //them sp
    function themSanPham() {
        return view('backend.product.addproduct');
    }
    function postThemSanPham(AddProductRequest $r) {
        // dd($r->all());
        $sanPham = new san_pham;
        $sanPham->ten=$r->ten;
        $sanPham->link_slug=Str::slug($r->ten, '-');
        $sanPham->gia=$r->gia;
        $sanPham->mieu_ta=$r->mieu_ta;
        $sanPham->giam_gia=$r->giam_gia;
        $sanPham->so_luong=$r->so_luong;
        $sanPham->noi_bat=$r->noi_bat;
        $sanPham->danh_muc_id=$r->danh_muc;
        $sanPham->save();
        if ($r->hasFile('anh')) {
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$sanPham->id.'.'.$file->getClientOriginalExtension();
            $sanPham->link_anh = 'upload/'.$tenFile;
            $file->move('backend/upload',$tenFile);
        } else {
            $sanPham->link_anh='no-img.jpg';

        }
        $sanPham->save();
        return redirect('/admin/product')->with('thongbao','Đã thêm thành công');
    }

    //sua sp
    function suaSanPham($idSp) {
        $data['sanPham'] = san_pham::find($idSp);
        return view('backend.product.editproduct',$data);
    }
    function postSuaSanPham(EditProductRequest $r,$idSp) {
        // dd($r->all());
        $sanPham = san_pham::find($idSp);
        $sanPham->ten=$r->ten;
        $sanPham->link_slug=Str::slug($r->ten, '-');
        $sanPham->gia=$r->gia;
        $sanPham->mieu_ta=$r->mieu_ta;
        $sanPham->giam_gia=$r->giam_gia;
        $sanPham->so_luong=$r->so_luong;
        $sanPham->noi_bat=$r->noi_bat;
        $sanPham->danh_muc_id=$r->danh_muc;

        if ($r->hasFile('anh')) {
            if ($sanPham->link_anh!='no-img.jpg') {
                unlink('backend/'.$sanPham->link_anh);
            }
            $file = $r->anh;
            $tenFile = Str::slug($r->ten, '-').'-'.$idSp.'.'.$file->getClientOriginalExtension();
            $sanPham->link_anh = 'upload/'.$tenFile;
            $file->move('backend/upload',$tenFile);
        }else{                                                              //đổi tên anh cũ theo tên sản phẩm mới
            if($r->ten!=''){
                $linkAnh = $sanPham->link_anh;                              //lấy tên cũ của ảnh trong database
                $mang = explode('.',$linkAnh);                              //cắt chuỗi tên ảnh thành phần tử trong mảng
                $duoiAnh = array_pop($mang);                          //lấy đuôi ảnh là phần tử cuối cùng của mảng
                $tenAnh = Str::slug($r->ten, '-').'-'.$idSp.'.'.$duoiAnh;   //tên ảnh mới
                rename(public_path('backend/'. $linkAnh),public_path('backend/upload/'. $tenAnh));  //đổi tên ảnh trong public
                $sanPham->link_anh = 'upload/'.$tenAnh;                                           // đổi tên ảnh trong database
            }
        }

        $sanPham->save();
        return redirect('/admin/product')->with('thongbao','Đã sửa thành công');
    }

    //xoa sp
    function xoaSanPham($idSp){
        $sanPham = san_pham::find($idSp);
        if ($sanPham->link_anh!='no-img.jpg') {
            unlink('backend/'.$sanPham->link_anh);
        }
        $sanPham->delete();
        return redirect('/admin/product')->with('thongbao','Đã xóa thành công');
    }
}
