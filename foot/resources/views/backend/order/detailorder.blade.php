@extends('backend.master.master')
@section('title','Chi tiết đơn hàng')
@section('order','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Đơn hàng / Chi tiết đặt hàng</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Chi tiết đặt hàng</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="panel panel-blue">
                                            <div class="panel-heading dark-overlay">Thông tin khách hàng</div>
                                            <div class="panel-body">
                                                <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> : Nguyễn thế phúc</strong> <br>
                                                <strong><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> : Số điện thoại: 0356653300</strong>
                                                <br>
                                                <strong><span class="glyphicon glyphicon-send" aria-hidden="true"></span> : Thường tín</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin Sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Thành tiền</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img width="100px" src="upload/dau-tay-1.jpg" class="thumbnail">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><b>Tên Sản phẩm</b>: Dâu tây</p>
                                                    <p><b>Số lượng</b> : 2</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>50.000 VNĐ</td>
                                        <td>100.000 VNĐ</td>

                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img width="100px" src="upload/dau-tay-1.jpg" class="thumbnail">
                                                </div>
                                                <div class="col-md-8">
                                                    <p><b>Tên Sản phẩm</b>: Dâu tây</p>
                                                    <p><b>Số lượng</b> : 1</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>50.000 VNĐ</td>
                                        <td>50.000 VNĐ</td>

                                    </tr>
                                </tbody>

                            </table>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th width='70%'>
                                            <h4 align='right'>Tổng Tiền :</h4>
                                        </th>
                                        <th>
                                            <h4 align='right' style="color: brown;">150.000 VNĐ</h4>
                                        </th>

                                    </tr>
                                    <tr>
                                        <th width='70%'>
                                            <h4 align='right'>Mã giảm giá: NOEL NO854</h4>
                                        </th>
                                        <th>
                                            <h4 align='right' style="color: brown;">15.000 VNĐ</h4>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th width='70%'>
                                            <h4 align='right'>Tổng :</h4>
                                        </th>
                                        <th>
                                            <h4 align='right' style="color: brown;">135.000 VNĐ</h4>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                            <div class="alert alert-primary" role="alert" align='right'>
                                <a name="" id="" class="btn btn-success" href="#" role="button">Xác nhận</a>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!--/.row-->


</div>
@endsection
@section('script')
    @parent
@endsection
