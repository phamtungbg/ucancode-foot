@extends('backend.master.master')
@section('title','Danh sách sản phẩm')
@section('product','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách sản phẩm</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách sản phẩm</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg>Đã thêm thành công<a href="#" class="pull-right"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            <a href="addproduct.html" class="btn btn-primary">Thêm sản phẩm</a>
                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Danh mục</th>
                                        <th width='18%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3"><img src="upload/dau-tay-1.jpg" alt="Áo đẹp"
                                                        width="100px" class="thumbnail"></div>
                                                <div class="col-md-9">
                                                    <p> <strong>Tên sản phẩm :Dâu tây</strong> </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>50.000 VND</td>
                                        <td>
                                            1000
                                        </td>
                                        <td>Trái cây</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Sửa</a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3"><img src="upload/dau-tay-1.jpg" alt="Áo đẹp"
                                                        width="100px" class="thumbnail"></div>
                                                <div class="col-md-9">
                                                    <p> <strong>Tên sản phẩm :Dâu tây</strong> </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>50.000 VND</td>
                                        <td>
                                            1000
                                        </td>
                                        <td>Trái cây</td>
                                        <td>
                                            <a href="#" class="btn btn-warning"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Sửa</a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div align='right'>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Trở lại</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">tiếp theo</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>

                </div>
            </div>
            <!--/.row-->


        </div>
    </div>
</div>
@endsection
@section('script')
    @parent
@endsection
