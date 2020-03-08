@extends('frontend.master.master')
@section('title','Thanh toán')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Thanh
                        toán</span></p>
                <h1 class="mb-0 bread">Thanh toán</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 ftco-animate">
                <form action="" method="POST" class="billing-form">
                    @csrf
                    <h3 class="mb-4 billing-heading">Thông tin thanh toán</h3>
                    <div class="row align-items-end">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="firstname">Họ và tên</label>
                                <input type="text" name="ho_ten" class="form-control" placeholder="VD:Nguyễn Thế Phúc">
                                {{hienLoi($errors,'ho_ten')}}
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="streetaddress">Địa chỉ</label>
                                <input type="text" name="dia_chi" class="form-control"
                                    placeholder="VD: Dũng tiến - Thường Tín - Hà Nội">
                                    {{hienLoi($errors,'dia_chi')}}
                            </div>
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="dien_thoai" class="form-control" placeholder="VD:0356653300">
                                {{hienLoi($errors,'dien_thoai')}}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailaddress">Email Address</label>
                                <input type="text" name="email" class="form-control" placeholder="">
                                {{hienLoi($errors,'email')}}
                            </div>
                        </div>

                    </div>
               <!-- END -->
            </div>
            <div class="col-xl-5">
                <div class="row mt-5 pt-3">
                    <div class="col-md-12 d-flex mb-5">
                        <div class="cart-detail cart-total p-3 p-md-4">
                            <h3 class="billing-heading mb-4">Cart Total</h3>
                            <p class="d-flex">
                                <span>Tổng tiền</span>
                                <span>{{Cart::total(0,'','.')}} VND</span>
                            </p>
                            <p class="d-flex">
                                <span>Tiền triết khấu</span>
                                <span>{{number_format($giamGia,0,'','.')}} VND</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span>Tổng tiền</span>
                                <span>{{number_format($thanhToan,0,'','.')}} VND</span>
                            </p>
                            <input type="hidden" name="ma_giam_gia" value="{{$maGiamGia}}">
                            <p><button type="submit" class="btn btn-primary py-3 px-4">Place an order</button></p>
                        </div>

                    </div>

                </div>
            </div> <!-- .col-md-8 -->
        </form>
        </div>
    </div>
</section> <!-- .section -->

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Đăng ký để nhận những sản phẩm mới</h2>
                <span>Cập nhật cửa hàng mới , sản phẩm mới</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Email của bạn">
                        <input type="submit" value="Đăng ký" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
    @parent
@endsection
