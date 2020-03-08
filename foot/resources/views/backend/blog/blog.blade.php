@extends('backend.master.master')
@section('title','Danh sách tin tức')
@section('blog','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#"><svg class="glyph stroked home">
                        <use xlink:href="#stroked-home"></use>
                    </svg></a></li>
            <li class="active">Danh sách tin tức</li>
        </ol>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Danh sách tin tức</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">

                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="/admin/blog/add" class="btn btn-primary">Thêm tin tức</a>
                            @if (session('thongBao'))
                            <div class="alert bg-success" role="alert">
                                <svg class="glyph stroked checkmark">
                                    <use xlink:href="#stroked-checkmark"></use>
                                </svg>{{session('thongBao')}}<a href="#" class="pull-right"><span
                                        class="glyphicon glyphicon-remove"></span></a>
                            </div>
                            @endif

                            <table class="table table-bordered" style="margin-top:20px;">

                                <thead>
                                    <tr class="bg-primary">
                                        <th>ID</th>
                                        <th>Thông tin tin tức</th>
                                        <th>Danh mục</th>
                                        <th>Người đăng</th>
                                        <th>Ngày đăng</th>
                                        <th width='18%'>Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tinTuc as $item)
                                        <tr>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-3"><img src="/backend/{{$item->link_anh}}" alt="Áo đẹp"
                                                        width="100px" class="thumbnail"></div>
                                                <div class="col-md-9">
                                                    <p> <strong>{{$item->tieu_de}}</strong> </p>
                                                    <p>{{$item->mieu_ta}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$item->danhMuc->ten}}</td>
                                        <td>{{$item->thanhVien->ten}}</td>
                                        <td>{{$item->created_at->format('M-d-Y')}}</td>
                                        <td>
                                        <a href="/admin/blog/edit/{{$item->id}}" class="btn btn-warning"><i class="fa fa-pencil"
                                                    aria-hidden="true"></i> Sửa</a>
                                            <a onclick="return hoiXoa('{{$item->tieu_de}}')" href="/admin/blog/del/{{$item->id}}" class="btn btn-danger"><i class="fa fa-trash"
                                                    aria-hidden="true"></i> Xóa</a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <div align='right'>
                                <ul class="pagination">
                                    {{$tinTuc->links()}}
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
    <script>
        function hoiXoa(tieu_de){
            return confirm('Bạn có muốn xóa tin tức '+tieu_de+' này không ?');
        }
    </script>
@endsection
