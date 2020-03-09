@extends('frontend.master.master')
@section('title','Trang Chủ')
@section('content')
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url(images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">Chúng tôi phục vụ những sản phẩm tươi</h1>
                        <h2 class="subheading mb-4">Chúng tôi luôn đêm đến chất lượng tốt nhất cho các bạn</h2>
                        <p><a href="/shop" class="btn btn-primary">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url(images/bg_2.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="col-sm-12 ftco-animate text-center">
                        <h1 class="mb-2">Chúng tôi phục vụ những sản phẩm tươi</h1>
                        <h2 class="subheading mb-4">Chúng tôi luôn đêm đến chất lượng tốt nhất cho các bạn</h2>
                        <p><a href="/shop" class="btn btn-primary">Xem chi tiết</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Miến phí ship</h3>
                        <span>Trên những đơn hàng trên 500 ngàn</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Sản phẩm tươi</h3>
                        <span>Đóng gói & bảo quản tốt</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Chất lượng cao</h3>
                        <span>Chất lượng</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Hỗ trợ</h3>
                        <span>24/7 hỗ trợ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 order-md-last align-items-stretch d-flex">
                        <div class="category-wrap-2 ftco-animate img align-self-stretch d-flex"
                            style="background-image: url(images/category.jpg);">
                            <div class="text text-center">
                                <h2>Sản Phẩm</h2>
                                <p>Bảo vệ sức khỏe cho mọi nhà</p>
                                <p><a href="#" class="btn btn-primary">Xem ngay</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                            style="background-image: url(images/category-1.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Trái Cây</a></h2>
                            </div>
                        </div>
                        <div class="category-wrap ftco-animate img d-flex align-items-end"
                            style="background-image: url(images/category-2.jpg);">
                            <div class="text px-3 py-1">
                                <h2 class="mb-0"><a href="#">Rau quả</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="category-wrap ftco-animate img mb-4 d-flex align-items-end"
                    style="background-image: url(images/category-3.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Nước ép</a></h2>
                    </div>
                </div>
                <div class="category-wrap ftco-animate img d-flex align-items-end"
                    style="background-image: url(images/category-4.jpg);">
                    <div class="text px-3 py-1">
                        <h2 class="mb-0"><a href="#">Hạt Khô</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Sản Phẩm Nổi Bật</span>
                <h2 class="mb-4">Sản phẩm của chúng tôi</h2>
                <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($spNb as $item)
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
                                    <span class="price-sale">{{number_format($item->gia*(100-$item->giam_gia)/100,0,'','.')}} VND</span></p>
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
                                <a href="/cart/add?id={{$item->id}}" class="buy-now d-flex justify-content-center align-items-center mx-1">
                                    <span><i class="ion-ios-cart"></i></span>
                                </a>
                                <a onclick="return wishlist('{{$item->ten}}','{{$item->id}}')" href="/" class="heart d-flex justify-content-center align-items-center ">
                                    <span><i class="ion-ios-heart"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach


        </div>
    </div>
</section>

<section class="ftco-section img" style="background-image: url(images/bg_3.jpg);">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <h2 class="mb-4">Sản phẩm Mua nhiều</h2>
                <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt</p>
                <h3><a href="#">Rau rền</a></h3>
                <span class="price">$10 <a href="#">giờ chỉ còn $5</a></span>
                <div id="timer" class="d-flex mt-5">
                    <div class="time" id="days"></div>
                    <div class="time pl-3" id="hours"></div>
                    <div class="time pl-3" id="minutes"></div>
                    <div class="time pl-3" id="seconds"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                <span class="subheading">Đánh giá</span>
                <h2 class="mb-4">Họ nói gì về sản phẩm của chúng tôi</h2>
                <p>Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt, there live the blind texts. </p>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt,
                                    there live the blind texts.</p>
                                <p class="name">Nguyễn Văn ninh</p>
                                <span class="position">Quản lý maketing</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt,
                                    there live the blind texts.</p>
                                <p class="name">Trần đăng khoa</p>
                                <span class="position">Thiết kế web</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt,
                                    there live the blind texts.</p>
                                <p class="name">Nguyễn đình chức</p>
                                <span class="position">Logic backend</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt,
                                    there live the blind texts.</p>
                                <p class="name">Nguyễn thế phúc</p>
                                <span class="position">Logic backend</span>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                            </div>
                            <div class="text text-center">
                                <p class="mb-5 pl-4 line">Đằng sau những ngọn núi, nơi chứa những sản phẩm tốt,
                                    there live the blind texts.</p>
                                <p class="name">Đỗ vũ hoàng anh</p>
                                <span class="position">javscript dev</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-1.png" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-2.png" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-3.png" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-4.png" class="img-fluid"
                        alt="Colorlib Template"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="images/partner-5.png" class="img-fluid"
                        alt="Colorlib Template"></a>
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

    <script>
        function wishlist(ten,id) {
            localStorage.setItem(ten, id);
            alert('Đã thêm vào wishlist');

            $.ajaxSetup({ cache: false });
            var id = [];
            for ( var i = 0, len = localStorage.length; i < len; ++i ) {
                id.push(localStorage.getItem(localStorage.key(i))) ;
                }
                console.log(id);

            $.post(
                "/shop/wishlist",
                {id:id,
                "_token": "{{ csrf_token() }}"},
                function(data){
                    // window.location.reload();
                }
            )
            return false;
        }
    </script>
@endsection
