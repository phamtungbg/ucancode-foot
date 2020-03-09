@extends('frontend.master.master')
@section('title','Giỏ hàng')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Giỏ
                        hàng</span></p>
                <h1 class="mb-0 bread">My Cart</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <thead class="thead-primary">
                            <tr class="text-center">
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>Sản phẩm</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gioHang as $item)
                            <tr class="text-center">
                            <td class="product-remove"><a href="/cart/del/{{$item->rowId}}"><span class="ion-ios-close"></span></a></td>

                                <td class="image-prod">
                                    <div class="img" style="background-image:url(/backend/{{$item->options->link_anh}});"></div>
                                </td>

                                <td class="product-name">
                                    <h3>{{$item->name}}</h3>
                                    <p>{{$item->options->mieu_ta}}</p>
                                </td>

                                <td class="price">{{number_format($item->price,0,'','.')}} VND</td>

                                <td class="quantity">
                                    <div class="input-group mb-3">
                                    <input onchange="return suaGioHang('{{$item->rowId}}',this.value)" type="text" name="quantity"
                                            class="quantity form-control input-number" value="{{$item->qty}}" min="1" max="{{$item->options->con_hang}}">
                                    </div>
                                </td>

                                <td class="total">{{number_format($item->price*$item->qty,0,'','.')}}</td>
                            </tr><!-- END TR-->
                            @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-lg-8 mt-5 cart-wrap ftco-animate">
                <form method="get" class="info">
                <div class="cart-total mb-3">
                    <h3>Mã giảm giá</h3>
                    <p>Hãy điền mã giảm giá nếu có</p>

                        <div class="form-group">
                            <label for="">Mã giảm giá</label>
                            <input type="text" name="ma_giam_gia" id="ma_giam_gia" class="form-control text-left px-3" placeholder="">
                        </div>

                </div>
                <p><a id="dungMa" class="btn btn-primary py-3 px-4">Sử dụng mã</a></p>
            </form>
            </div>
            <div class="col-lg-4 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Tính tiền</h3>
                    <p class="d-flex">
                        <span>Tổng tiền</span>
                        <span>{{Cart::total(0,'','.')}} VND</span>
                    </p>
                    <p class="d-flex">
                        <span>Tiền triết khấu</span>
                        <span> {{number_format($giamGia,0,'','.')}} VND</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Tổng tiền</span>
                        <span>{{number_format($thanhToan,0,'','.')}} VND</span>
                    </p>
                </div>
                <p><a href="/cart/checkout" class="btn btn-primary py-3 px-4">Hoàn tất thanh toán</a></p>
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
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){

		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());

		        // If is not undefined

		            $('#quantity').val(quantity + 1);


		            // Increment

		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());

		        // If is not undefined

		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });

		});
	</script>
    <script>
        $('#dungMa').click(function(event){
            event.preventDefault();
            var maGiamGia = $("#ma_giam_gia").val();

            if (maGiamGia=='') {
                return alert('Hãy nhập mã giảm giá !')
            }

            $.post(
                "/cart/giam-gia",
                {maGiamGia:maGiamGia,"_token": "{{ csrf_token() }}"},
                function(data) {
                    if (data=='wrong code') {
                        return alert('Mã giảm giá không tồn tại !');
                    }else if(data=='code used'){
                        return alert('Mã giảm giã đã được sử dụng !');
                    }else if(data == 'already use code'){
                        return alert('Mỗi đơn hàng chỉ áp dụng 1 mã giảm giá');
                    }else if(data=='success'){
                        alert('Áp dụng mã thành công');
                        window.location.reload();
                    }
                }
            );
        }
        );
    </script>
    <script>
        function suaGioHang(rowId,qty) {
            $.get(
                "/cart/update/"+rowId+"/"+qty,
                function(data) {
                    if (data=='update success') {
                        location.reload();
                    }else{
                        alert('cập nhật giỏ hàng thất bại');
                    }
                }
            )
        }
    </script>
@endsection
