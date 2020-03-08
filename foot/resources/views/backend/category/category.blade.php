@extends('backend.master.master')
@section('title','Danh mục')
@section('category','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh mục</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý danh mục</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <form action="" method="post" enctype="multipart/form-data">
                            @csrf
                        <div class="col-md-5">

                            <div class="form-group">
                                <label for="">Danh mục cha:</label>
                                <select class="form-control" name="danh_muc" id="">
                                    {{dmSelectOpt($allDanhMuc,0,'',0)}}
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tên Danh mục</label>
                                <input type="text" class="form-control" name="ten" id=""
                                    placeholder="Tên danh mục mới">
                                    {{hienLoi($errors,'ten')}}
                            </div>

                            <div class="form-group">
                                <label>Ảnh danh mục</label>
                                <input id="img" type="file" name="anh" class="form-control hidden"
                                    onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="100%" height="400px" src="upload/import-img.png">
                                {{hienLoi($errors,'anh')}}
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                        </div>
                    </form>
                        <div class="col-md-7">
                            @if (session('thongBao'))
                            <div class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg> session('thongBao') <a href="#" class="pull-right"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif

                            <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                            <div class="vertical-menu">
                                <div class="item-menu active">Danh mục </div>
                                {{dmMenu($allDanhMuc,0,'')}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.col-->


    </div>
    <!--/.row-->
</div>
@endsection
@section('script')
    @parent
    <script>
        function changeImg(input) {
            //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                //Sự kiện file đã được load vào website
                reader.onload = function (e) {
                    //Thay đổi đường dẫn ảnh
                    $('#avatar').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $(document).ready(function () {
            $('#avatar').click(function () {
                $('#img').click();
            });
        });
    </script>
     <script>
        function xoaDm(ten) {
            return confirm('Bạn muốn xóa danh mục '+ ten + 'này ?');
        }
    </script>
@endsection
