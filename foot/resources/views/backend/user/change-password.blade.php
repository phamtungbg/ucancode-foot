@extends('backend.master.master')
@section('title','Đổi mật khẩu')
@section('user','active')
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Đổi mật khẩu</h1>
        </div>
    </div>
    <!--/.row-->
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">

            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fas fa-user"></i> Đổi mật khẩu</div>
                <div class="panel-body">
                    <div class="row justify-content-center" style="margin-bottom:40px">
                    <form method="post">
                        @csrf
                        <div class="col-md-8 col-lg-8 col-lg-offset-2">

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" value="">
                                {{hienLoi($errors,'password')}}
                            </div>

                            <div class="form-group">
                                <label>Nhập lại Password</label>
                                <input type="password" name="password_conf" class="form-control" value="">
                                {{hienLoi($errors,'password_conf')}}
                            </div>
                            <div class="form-group">
                                <label>Password mới</label>
                                <input type="password" name="new_password" class="form-control" value="">
                                {{hienLoi($errors,'new_password')}}
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-8 col-lg-8 col-lg-offset-2 text-right">
                                <button class="btn btn-success" type="submit">Thay đổi</button>
                                <button class="btn btn-danger" type="reset">Huỷ bỏ</button>
                            </div>

                        </div>
                    </form>
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
