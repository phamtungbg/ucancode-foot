<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quên mật khẩu</title>
    <base href="/backend/">
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
                <div class="panel-heading">Quên mật khẩu</div>
                @if (session('thongBao'))
                <div class="alert alert-success" role="alert">
                    <strong>{{session('thongBao')}}</strong>
                </div>
                @endif
				<div class="panel-body">
					<form role="form" method="POST">
                        @csrf
						<fieldset>

							<div class="form-group">
                                <label>Nhập email của bạn</label>
                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                {{hienLoi($errors,'email')}}
                                <label>Password mới sẽ được gửi vào email này !</label>
							</div>
							<div class="row">
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary">Nhận mật khẩu mới </button>

								</div>
								<div class="col-md-8 text-right">
                                    <a href="/register" class="btn btn-success">Đăng ký</a>
									<a href="/login" class="btn btn-success">Quay lại login</a>
								</div>
							</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</body>

</html>
