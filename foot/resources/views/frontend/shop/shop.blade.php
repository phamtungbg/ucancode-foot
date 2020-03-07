@extends('frontend.master.master')
@section('title','Cửa hàng')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>Sản
                        phẩm</span></p>
                <h1 class="mb-0 bread">Sản phẩm</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mb-5 text-center">
                <ul class="product-category">
                    <li><a href="/shop" @if ($activeDm==0) class="active" @endif>Tất cả</a></li>
                    @foreach ($danhMuc as $item)
                    <li><a @if ($activeDm==$item->id) class="active" @endif href="/shop/{{$item->link_slug}}/{{$item->id}}">{{$item->ten}}</a></li>
                    @endforeach

                </ul>
            </div>
        </div>
        <div class="row">
            @foreach ($sanPham as $item)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="/{{$item->link_slug}}-{{$item->id}}.html" class="img-prod"><img class="img-fluid" src="/backend/{{$item->link_anh}}"
                            alt="Colorlib Template">
                            @if ($item->giam_gia!='')
                            <span class="status">{{$item->giam_gia}}%</span>
                            @endif
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="/{{$item->link_slug}}-{{$item->id}}.html">{{$item->ten}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span @if ($item->giam_gia!='') class="mr-2 price-dc" @endif>{{number_format($item->gia,0,'','.')}} VND</span>
                                    @if ($item->giam_gia!='')
                                    <span class="price-sale">{{number_format($item->gia-($item->gia*$item->giam_gia/100),0,'','.')}} VND</span></p>
                                    @else
                                        </p>
                                    @endif

                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="/{{$item->link_slug}}-{{$item->id}}.html"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{-- <ul> --}}
                        {{$sanPham->links('/vendor/pagination/default')}}
                        {{-- <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>

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
