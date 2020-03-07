@extends('backend.master.master')
@section('title','Sửa tin tức')
@section('blog','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Sửa tin tức</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-6 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">Sửa tin tức</div>
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="panel-body">
                    <div class="row" style="margin-bottom:40px">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select name="danh_muc" class="form-control">
                                    <option value='1' selected>Tin tức</option>
                                    <option selected value='2'>---|Trái cây</option>
                                    <option value='3'>---|Nước ép</option>
                                    <option value='4'>---|Rau quả</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="text" name="tieu_de" class="form-control"
                                    value="{{$tinTuc->tieu_de}}">
                                    {{hienLoi($errors,'tieu_de')}}
                            </div>
                            <div class="form-group">
                                <label>Tags</label>
                                <input type="text" name="the_tag" class="form-control" value="{{$tinTuc->the_tag}}">
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="mo_ta"
                                    style="width: 100%;height: 100px;">{{$tinTuc->mo_ta}}</textarea>
                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Ảnh tin tức</label>
                                <input id="img" type="file" name="anh" class="form-control hidden"
                                    onchange="changeImg(this)">
                                <img id="avatar" class="thumbnail" width="100%" height="325px"
                                    src="{{$tinTuc->link_anh}}">
                                    {{hienLoi($errors,'anh')}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="noi_dung" style="width: 100%;height: 500px;">{{$tinTuc->noi_dung}} </textarea>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-success" name="add-product" type="submit">Sửa tin tức</button>
                            <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
            </div>

        </div>
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
