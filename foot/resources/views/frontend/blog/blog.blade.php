@extends('frontend.master.master')
@section('title','Tin tức')
@section('content')

<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Trang chủ</a></span> <span>Tin
                        tức</span></p>
                <h1 class="mb-0 bread">Tin tức</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <div class="row">
                    @foreach ($tinTuc as $item)
                    <div class="col-md-12 d-flex ftco-animate">
                        <div class="blog-entry align-self-stretch d-md-flex">
                            <a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}" class="block-20"
                        style="background-image: url('/backend/{{$item->link_anh}}');">
                            </a>
                            <div class="text d-block pl-md-4">
                                <div class="meta mb-3">
                                    <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}">{{$item->created_at->format('M-d-Y')}}</a></div>
                                    <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}">{{$item->thanhVien->ho_ten}}</a></div>
                                    <div><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                                </div>
                                <h3 class="heading"><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}">{{$item->mo_ta}}</p>
                                <p><a href="/blog/{{$item->link_slug}}-{{$item->id}}/{{$item->danh_muc_id}}" class="btn btn-primary py-2 px-3">Xem thêm</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>
            </div> <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar ftco-animate">
                <div class="sidebar-box">
                    <form method="GET" class="search-form" id="tim-kiem">
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
