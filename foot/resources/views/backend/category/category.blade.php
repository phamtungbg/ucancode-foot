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
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="">Danh mục cha:</label>
                                <select class="form-control" name="danh_muc" id="">
                                    <option>----ROOT----</option>
                                    <option>Sản phẩm</option>
                                    <option>---|Trái cây</option>
                                    <option>---|Nước ép</option>
                                    <option>---|Rau củ</option>
                                    <option>---|Đồ khô</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tên Danh mục</label>
                                <input type="text" class="form-control" name="ten" id=""
                                    placeholder="Tên danh mục mới">

                                <div class="alert bg-danger" role="alert">
                                    <svg class="glyph stroked cancel">
                                        <use xlink:href="#stroked-cancel"></use>
                                    </svg>Tên danh mục đã tồn tại!<a href="#" class="pull-right"><span
                                            class="glyphicon glyphicon-remove"></span></a>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Loại danh mục</label>
                                <select class="form-control" name="loai_danh_muc" id="">
                                    <option>Sản phẩm</option>
                                    <option>Tin tức</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Ảnh danh mục</label>
                                <input id="img" type="file" name="anh" class="form-control hidden"
                                    onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="100%" height="400px" src="upload/import-img.png">
                            </div>
                            <button type="submit" class="btn btn-primary">Thêm danh mục</button>
                        </div>
                        <div class="col-md-7">
                            <div class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg> Đã thêm danh mục thành công! <a href="#" class="pull-right"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            <h3 style="margin: 0;"><strong>Phân cấp Menu</strong></h3>
                            <div class="vertical-menu">
                                <div class="item-menu active">Danh mục </div>
                                <div class="item-menu"><span>Sản phẩm</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary" href="editcategory.html"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i
                                                class="fas fa-times"></i></i></a>

                                    </div>
                                </div>
                                <div class="item-menu"><span>---|Trái cây</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary" href="editcategory.html"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i
                                                class="fas fa-times"></i></i></a>

                                    </div>
                                </div>
                                <div class="item-menu"><span>---|---|Trái cây (Dành cho việc mở rộng)</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary" href="editcategory.html"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i
                                                class="fas fa-times"></i></i></a>

                                    </div>
                                </div>
                                <div class="item-menu"><span>Tin tức</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary" href="editcategory.html"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i
                                                class="fas fa-times"></i></i></a>

                                    </div>
                                </div>
                                <div class="item-menu"><span>---|Trái cây</span>
                                    <div class="category-fix">
                                        <a class="btn-category btn-primary" href="editcategory.html"><i
                                                class="fa fa-edit"></i></a>
                                        <a class="btn-category btn-danger" href="#"><i
                                                class="fas fa-times"></i></i></a>

                                    </div>
                                </div>

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
@endsection
