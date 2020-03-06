@extends('backend.master.master')
@section('title','Đơn hàng')
@section('order','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Đơn hàng</li>
        </ol>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading">Danh sách đơn đặt hàng</div>
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-top:20px;">
                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Tên khách hàng</th>
                                        <th>Sđt</th>
                                        <th>Địa chỉ</th>
                                        <th>Tổng tiền</th>
                                        <th>Chi tiết</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($donHang as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->ho_ten}}</td>
                                        <td>{{$item->dien_thoai}}</td>
                                        <td>{{$item->dia_chi}}</td>
                                        <td>{{number_format($item->tong_tien,0,'','.')}} VND</td>
                                        <td>
                                            <a href="/admin/order/detail/{{$item->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>Chi tiết</a>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
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
