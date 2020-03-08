<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\models\ct_don_hang;
use App\models\don_hang;
use App\models\ma_giam_gia;
use App\models\san_pham;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    function gioHang(request $r) {
        if ($r->ma_giam_gia!='') {
            $data['maGiamGia'] = $r->ma_giam_gia;
            $data['gioHang'] =Cart::content();
            $data['giamGia'] = Cart::total(0,'','')*10/100;
            $data['thanhToan']=Cart::total(0,'','')-(Cart::total(0,'','')*10/100);
            return view('frontend.cart.cart',$data);
        }
        $data['maGiamGia'] = '';
        $data['gioHang'] =Cart::content();
        $data['giamGia'] = 0;
        $data['thanhToan']=Cart::total(0,'','');
        // dd(Cart::content()->toarray());
        return view('frontend.cart.cart',$data);
    }
    function addGioHang(Request $r){
        // dd($r->all());
        $sanPham = san_pham::find($r->id);
        Cart::add(['id' => $sanPham->id,
        'name' => $sanPham->ten,
        'qty' => $r->input('quantity',1),
        'price' => $sanPham->gia*(100-$sanPham->giam_gia)/100,
        'weight' => 0,
        'options' => ['link_anh' => $sanPham->link_anh,
                        'giam_gia'=>$sanPham->giam_gia,
                        'con_hang' => $sanPham->so_luong,
                        'mieu_ta' => $sanPham->mieu_ta
                        ]]);

        return redirect('/cart');
    }

    function maGiamGia($maGiamGia){
        $maGg = ma_giam_gia::where('ma',$maGiamGia)->first();
        if ($maGg!='') {
            if ($maGg->trang_thai==1) {
                return 'code used';
            } else {

               return 'success';
            }
        }else{
           return 'wrong code';
        }
    }

    function thanhToan(request $r) {
        if ($r->ma_giam_gia!='') {
            $data['maGiamGia'] = $r->ma_giam_gia;
            $data['gioHang'] =Cart::content();
            $data['giamGia'] = Cart::total(0,'','')*10/100;
            $data['thanhToan']=Cart::total(0,'','')-(Cart::total(0,'','')*10/100);
            return view('frontend.cart.checkout',$data);
        }
        $data['maGiamGia'] = '';
        $data['gioHang'] =Cart::content();
        $data['giamGia'] = 0;
        $data['thanhToan']=Cart::total(0,'','');
        // dd(Cart::content()->toarray());
        return view('frontend.cart.checkout',$data);

    }
    function postThanhToan(CheckoutRequest $r) {
        $maGiamGia = ma_giam_gia::where('ma',$r->ma_giam_gia)->first();
        $maGiamGia->trang_thai =1 ;

        $donHang = new don_hang;
        $donHang->ho_ten=$r->ho_ten;
        $donHang->dia_chi=$r->dia_chi;
        $donHang->dien_thoai=$r->dien_thoai;
        $donHang->tong_tien = Cart::total(0,'','');
        $donHang->email=$r->email;
        $donHang->save();
        foreach (Cart::content() as $item) {
            $ctDonHang = new ct_don_hang;
            $ctDonHang->ct_ten= $item->name;
            $ctDonHang->ct_link_anh= $item->options->link_anh;
            $ctDonHang->ct_gia= $item->price;
            $ctDonHang->ct_so_luong_mua=$item->qty;
            $ctDonHang->don_hang_id= $donHang->id;
            $ctDonHang->san_pham_id= $item->id;
            $ctDonHang->ma_giam_gia_id= $maGiamGia->id;
            $ctDonHang->save();
        }

        Cart::destroy();
        return redirect('/');
    }

    function xoaGioHang($rowId){
        Cart::remove($rowId);
        return redirect('/cart');
    }

    function suaGioHang($rowId,$qty){
        Cart::update($rowId,$qty);
        return 'update success';
    }
}
