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

use Illuminate\Routing\RouteGroup;

Route::get('','frontend\HomeController@trangChu');
    Route::get('about', 'frontend\HomeController@thongTin');
    Route::get('contact', 'frontend\HomeController@lienHe');

//Blog
Route::group(['prefix' => 'blog'], function () {
    Route::get('','frontend\BlogController@tinTuc');
    Route::get('blog-single', 'frontend\BlogController@ctTinTuc');
});


//Shop
Route::group(['prefix' => 'shop'], function () {
    Route::get('', 'frontend\ShopController@cuaHang');
    Route::get('product-single', 'frontend\ShopController@ctSanPham');
    Route::get('wishlist','frontend\ShopController@spUaThich');
});


//Cart
Route::group(['prefix' => 'cart'], function () {
    Route::get('','frontend\CartController@gioHang');
    Route::get('checkout', 'frontend\CartController@thanhToan');

});


//BACKEND
//login
Route::get('login','backend\LoginController@dangNhap' );

//admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'backend\IndexController@admin');

    //category
    Route::group(['prefix' => 'category'], function () {
        Route::get('', 'backend\CategoryController@danhMuc');
        Route::get('edit', 'backend\CategoryController@suaDanhMuc');
    });

    //product
    Route::group(['prefix' => 'product'], function () {
        Route::get('', 'backend\ProductController@sanPham');
        Route::get('add', 'backend\ProductController@themSanPham');
        Route::get('edit', 'backend\ProductController@suaSanPham');
    });

    //blog
    Route::group(['prefix' => 'blog'], function () {
        Route::get('', 'backend\BlogController@tinTuc');
        Route::get('add', 'backend\BlogController@themTinTuc');
        Route::get('edit', 'backend\BlogController@suaTinTuc');
    });

    //order
    Route::group(['prefix' => 'order'], function () {
        Route::get('', 'backend\OrderController@donHang');
        Route::get('detail', 'backend\OrderController@ctDonHang');
    });
});


