<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/fox-admin-template/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 04:49:06 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('images/favicon.ico')}}">

    <title>Fox Admin - Log in </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/font-awesome/css/font-awesome.min.css')}}">

	<!-- Ionicons -->
	<link rel="stylesheet" href="{{asset('assets/vendor_components/Ionicons/css/ionicons.min.css')}}">

	<!-- Theme style -->
	<link rel="stylesheet" href="{{asset('css/master_style.css')}}">

	<!-- foxadmin Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="{{asset('css/skins/_all-skins.css')}}">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index-2.html"><b>Fox</b>Admin</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Đăng nhập tài khoản của bạn</p>
   @if(count($errors) > 0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $err)
          {{$err}}<br>
         @endforeach
      </div>
    @endif
    @if(Session::has('message'))
    <h5 class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</h5>
    @endif
    <form action="{{url('Admin/login')}}" method="post" class="form-element">
      <input type="hidden" name="_token" value="{{csrf_token()}}">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="checkbox">
            <input type="checkbox" id="basic_checkbox_1" >
			<label for="basic_checkbox_1">Remember Me</label>
          </div>
        </div>
        <!-- /.col -->
  
        <!-- /.col -->
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-info btn-block btn-flat margin-top-10">Đăng nhập</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-social-icon btn-circle btn-facebook"><i class="fa fa-facebook"></i></a>
      <a href="#" class="btn btn-social-icon btn-circle btn-google"><i class="fa fa-google-plus"></i></a>
    </div>
    <!-- /.social-auth-links -->

    <div class="margin-top-30 text-center">
    	<p>Bạn chưa có tài khoản <a href="{{url('register')}}" class="text-info m-l-5">Đăng ký</a></p>
    </div>
       <div class="col-12" style="margin-left: 35px">
         <div class="fog-pwd">
            <b>Lấy lại tài khoản: 01674763838</b><br>
          </div>
        </div>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
	<!-- jQuery 3 -->
	<script src="{{asset('assets/vendor_components/jquery/dist/jquery.min.js')}}"></script>
	
	<!-- popper -->
	<script src="{{asset('assets/vendor_components/popper/dist/popper.min.js')}}"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

</body>

<!-- Mirrored from fox-admin-templates.multipurposethemes.com/fox-admin-template/pages/examples/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 04:49:06 GMT -->
</html>
