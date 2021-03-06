<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//FRONTEND

Route::get('','frontend\HomeController@trangChu');
    Route::get('about', 'frontend\HomeController@thongTin');
    Route::get('contact', 'frontend\HomeController@lienHe');

//Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('','frontend\BlogController@tinTuc');
    Route::get('{slugTt}/{idDm}', 'frontend\BlogController@ctTinTuc');
    Route::get('{slugDm}','frontend\BlogController@tinTucDm');
});



//Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('', 'frontend\ShopController@cuaHang');
    Route::get('wishlist','frontend\ShopController@spUaThich');
    Route::post('wishlist','frontend\ShopController@postUaThich');
    Route::get('{dmSlug}/{dmId}', 'frontend\ShopController@dmCuaHang');
});
Route::get('{slugSp}.html', 'frontend\ShopController@ctSanPham');

//Cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('','frontend\CartController@gioHang');
    Route::get('add','frontend\CartController@addGioHang');
    Route::get('buy-now','frontend\CartController@muaNgay');
    Route::get('checkout', 'frontend\CartController@thanhToan');
    Route::post('checkout', 'frontend\CartController@postThanhToan');
    Route::post('giam-gia','frontend\CartController@maGiamGia');
    Route::get('del/{rowId}','frontend\CartController@xoaGioHang');
    Route::get('update/{rowId}/{qty}','frontend\CartController@suaGioHang');
});


//BACKEND
//login
Route::get('login','backend\LoginController@dangNhap')->middleware('CheckLogout');
Route::post('login','backend\LoginController@postDangNhap');
Route::get('logout','backend\LoginController@dangXuat');
Route::get('register', 'backend\LoginController@dangKy');
Route::post('register', 'backend\LoginController@postDangKy');
Route::get('forget-password', 'backend\LoginController@quenMatKhau');
Route::post('forget-password', 'backend\LoginController@postQuenMatKhau');
//admin
Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function () {
    Route::get('', 'backend\IndexController@admin');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@danhMuc');
        Route::post('', 'backend\CategoryController@postThemDanhMuc');
        Route::get('edit/{dmId}', 'backend\CategoryController@suaDanhMuc');
        Route::post('edit/{dmId}', 'backend\CategoryController@postSuaDanhMuc');
        Route::get('del/{dmId}', 'backend\CategoryController@xoaDanhMuc');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@sanPham');
        Route::get('add', 'backend\ProductController@themSanPham');
        Route::post('add', 'backend\ProductController@postThemSanPham');
        Route::get('edit/{idSp}', 'backend\ProductController@suaSanPham');
        Route::post('edit/{idSp}', 'backend\ProductController@postSuaSanPham');
        Route::get('del/{idSp}', 'backend\ProductController@xoaSanPham');
    });

    //blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'backend\BlogController@tinTuc');
        Route::get('add', 'backend\BlogController@themTinTuc');
        Route::post('add', 'backend\BlogController@postThemTinTuc');
        Route::get('edit/{idTin}', 'backend\BlogController@suaTinTuc');
        Route::post('edit/{idTin}', 'backend\BlogController@postSuaTinTuc');
        Route::get('del/{idTin}', 'backend\BlogController@xoaTinTuc');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@donHang');
        Route::get('detail/{idDonHang}', 'backend\OrderController@ctDonHang');
    });

    //user
    Route::group(['prefix' => 'user'], function () {
        Route::get('', 'backend\UserController@dsThanhVien');
        Route::get('register', 'backend\UserController@dsDangKy');
        Route::get('accept/{idUser}', 'backend\UserController@chapNhan');
        Route::get('change-password/{idUser}', 'backend\UserController@doiMatKhau');
        Route::post('change-password/{idUser}', 'backend\UserController@postDoiMatKhau');
        Route::get('del/{idUser}', 'backend\UserController@xoaThanhVien');
    });
});


