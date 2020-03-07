@extends('frontend.master.master')
@section('title','Tin tức')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span>
                    <span>Blog</span></p>
                <h1 class="mb-0 bread">Blog</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <h2 class="mb-3">{{$tinTuc->tieu_de}}</h2>
                <p>

                    </strong>
                    <div class="full-description"><strong>
                        {{$tinTuc->mo_ta}}
                        </strong>
                        <p></p>
                        {!!$tinTuc->noi_dung!!}

                    </div>

                </p>


                <div class="pt-5 mt-5">
                    <h3 class="mb-5">6 bình luận</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">June 27, 2018 at 2:21pm</div>
                                <p>Wao quá tuyệt vời với những sản phẩm tươi ngon</p>

                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="images/person_1.jpg" alt="Image placeholder">
                            </div>
                            <div class="comment-body">
                                <h3>John Doe</h3>
                                <div class="meta">June 27, 2018 at 2:21pm</div>
                                <p>Không tin nhưng mà thật sự hoa quả rất tuyệt</p>

                            </div>
                        </li>


                    </ul>
                    <!-- END comment-list -->

                    <div class="comment-form-wrap pt-5">
                        <h3 class="mb-5">Bình luận</h3>
                        <form action="#" class="p-5 bg-light">
                            <div class="form-group">
                                <label for="name">Tên *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>

                            <div class="form-group">
                                <label for="message">Nội dung</label>
                                <textarea name="" id="message" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Gửi" class="btn py-3 px-4 btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form method="GET" action="/blog" class="search-form" id="tim-kiem">
                        <div class="form-group">
                            <span class="icon ion-ios-search"></span>
                            <input onchange="return search()" type="text" class="form-control" name="tuKhoa" placeholder="Tìm kiếm..." value="">
                        </div>
                    </form>
                </div>
                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Danh mục</h3>
                    <ul class="categories">
                        @foreach ($danhMuc as $item)
                            <li><a href="/blog/{{$item->link_slug}}-{{$item->id}}">{{$item->ten}} <span>({{$item->tinTuc->count()}})</span></a></li>
                        @endforeach
                    </ul>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Bài viết gần đây</h3>
                    @foreach ($ttMoi as $item)
                    <div class="block-21 mb-4 d-flex">
                        <a class="blog-img mr-4" style="background-image: url(/backend/{{$item->link_anh}});"></a>
                        <div class="text">
                            <h3 class="heading-1"><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}">{{$item->tieu_de}}</a></h3>
                            <div class="meta">
                                <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}"><span class="icon-calendar"></span> {{$item->created_at->format('M-d-Y')}}</a></div>
                                <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}"><span class="icon-person"></span> {{$item->thanhVien->ho_ten}}</a></div>
                                <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}"><span class="icon-chat"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Tag</h3>
                    <div class="tagcloud">
                        <a href="#" class="tag-cloud-link">Nước ép</a>
                        <a href="#" class="tag-cloud-link">Cà chua</a>
                        <a href="#" class="tag-cloud-link">Xoài</a>
                        <a href="#" class="tag-cloud-link">táo</a>
                        <a href="#" class="tag-cloud-link">Cà rốt</a>
                        <a href="#" class="tag-cloud-link">orange</a>
                        <a href="#" class="tag-cloud-link">hạt tiêu</a>
                        <a href="#" class="tag-cloud-link">trứng</a>
                    </div>
                </div>

                <div class="sidebar-box ftco-animate">
                    <h3 class="heading">Giới thiệu</h3>
                    <p>Trong thực vật học, quả (phương ngữ miền Bắc) hoặc trái (phương ngữ miền Nam) là một phần của
                        những loại thực vật có hoa, chuyển hóa từ những mô riêng biệt của hoa, có thể có một hoặc
                        nhiều bầu nhụy và trong một số trường hợp thì là mô phụ</p>
                </div>
            </div>

        </div>
    </div>
</section> <!-- .section -->
@endsection
@section('script')
    @parent
    <script>
        function search() {
            return document.getElementById("tim-kiem").submit();
        }
    </script>
@endsection
