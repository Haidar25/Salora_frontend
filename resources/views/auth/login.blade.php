<!DOCTYPE html>
<html lang="en">
<head>
	<title>SALORA</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <!-- iconfont -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css') }}">

    <!-- simple line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/simple-line-icons/css/simple-line-icons.css') }}">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Weather css -->
    <link href="{{ asset('assets/css/svg-weather.css') }}" rel="stylesheet')">

    <!-- Echart js -->
    <script src="{{ asset('assets/plugins/charts/echarts/js/echarts-all.js') }}"></script>

    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

    <!-- Responsive.css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.min.css') }}" id="color"/>

</head>
<body>


<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12"><center>
            <a href="/" style=" background-color: #f44336; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;" class="f-w-600 p-l-5"> Kembali ke Home</a>
            </center>
				<div class="login-card card-block" style="border-radius: 90px 30px;">
                        <form class="md-float-material" action="/login" method="POST">
                            @csrf
                            <div class="text-center">
                                <h1> SALORA </h1>
                            </div>
                            <h3 class="text-center txt-primary">Masukkan E-mail & Kata sandi </h3>

                            @if (Session::get('keterangan'))
                            <div class="alert alert-success">{{Session::get('keterangan')}}</div>
                            @endif

                            @if ($errors)
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif

                                <div class="form-group">
                                        <label>Alamat Email</label>
                                <input type="email" class="md-form-control" required="" name="email">
                                </div>
                                <div class="form-group">
                                        <label>Kata Sandi</label>
                                    <input type="password" class="md-form-control" required="" name="password">
                                </div>

                            <div class="col-xs-10 offset-xs-1">
                            <input type="submit" value="Login Sekarang" style="border-radius: 90px 20px;" class="btn btn-primary btn-md btn-block waves-effect waves-light m-b-20">
                            </div>
                                <div class="row">
                                    <div class="col-xs-12 text-center">
                                        <span class="text-muted">Anda belum daftar?</span>
                                        <a href="/register" class="f-w-600 p-l-5"> Daftar Sekarang !</a>

                                        <div class="form-group row mb-0">
                               <br><br>
                                <a href="{{ url('/login/twitter') }}" >
                                <i class="fa fa-twitter"></i>
                                Masuk dengan Twitter ||
                                </a>
                                <a href="{{ url('/login/github') }}">
                                <i class="fa fa-github"></i>
                                  Github ||
                                </a>
                                <a href="{{ url('/login/google') }}">
                                <i class="fa fa-google"></i>
                                  Google
                                   
                    </a>
                </div>

                                    </div>
                                </div>
                        </form>
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

</body>
</html>
