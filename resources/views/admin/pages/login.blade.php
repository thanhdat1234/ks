<!DOCTYPE html>
<html lang="en-us" id="extr-page">

<head>
	<meta charset="utf-8">
	<title>Đăng nhập</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- #CSS Links -->
	<!-- Basic Styles -->
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/font-awesome.min.css">

	<!-- SmartAdmin Styles : Caution! DO NOT change the order -->
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/smartadmin-production-plugins.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/smartadmin-production.min.css">
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/smartadmin-skins.min.css">

	<!-- SmartAdmin RTL Support -->
	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/smartadmin-rtl.min.css">

	<link rel="stylesheet" type="text/css" media="screen" href="{!! asset('public/admin/assets') !!}/css/demo.min.css">
	<!-- #GOOGLE FONT -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">



	<style>
		h1#b {
			padding-top: 0px;
			padding-left: 0px;
			font-size: 18px;
			margin-top: 3px;
			font-family: medula one;
			color: #fff;
			text-shadow: 0 1px 0 #ccc,
			0 2px 0 #c9c9c9,
			0 3px 0 #bbb,
			0 4px 0 #b9b9b9,
			0 5px 0 #aaa,
			0 6px 1px rgba(0, 0, 0, .1),
			0 0 5px rgba(0, 0, 0, .1),
			0 1px 3px rgba(0, 0, 0, .3),
			0 3px 5px rgba(0, 0, 0, .2),
			0 5px 10px rgba(0, 0, 0, .25),
			0 10px 10px rgba(0, 0, 0, .2),
			0 20px 20px rgba(0, 0, 0, .15);
		}
		#logo p {
			font-size: 17px;
			color: #1666c0;
			font-weight: 600;
		}

		#logo a {
			color: blue;
			font-weight: 600;
		}

		#logo span {
			font-size: 18px;
			color: red;
		}
	</style>
	

</head>

<body class="animated fadeInDown">

	<header id="header">

			<!-- PLACE YOUR LOGO HERE -->
			<span id="logo">
				<h1 id="b" class="navbar-brand">
					<a href="index.html#body">NHÀ NGHỈ
						<span>THÁI BÌNH</span>
					</a>
				</h1>
			</span>
			<!-- END LOGO PLACEHOLDER -->
	</header>

	<div id="main" role="main">

		<!-- MAIN CONTENT -->
		<div id="content" class="container">

			<div class="row">
				@if(Session::get('status_login'))
					<div class="col-lg-12 my-alert">
						<div class="alert alert-danger">
							<ul>
								{{Session::get('status_login')}}
							</ul>
						</div>
						<hr>
					</div>
				@endif

				@if(count($errors) > 0)
					<div class="col-lg-12 my-alert">
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error)
									<li>{!! $error !!}</li>
								@endforeach
							</ul>
						</div>
						<hr>
					</div>
				@endif


				<div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-lg-push-4">
					<div class="well no-padding">
						<form id="login-form" class="smart-form client-form" action="{!! url('admin/login') !!}" method="post">
							<input type="text" hidden name="_token" value="{!! csrf_token()  !!}">
							<header>
								Đăng nhập
							</header>
							<fieldset>
								<section>
									<label class="label">Email đăng nhập</label>
									<label class="input">
										<i class="icon-append fa fa-user"></i>
										<input type="email" name="email" required oninvalid="this.setCustomValidity('Vui lòng nhập email')"
										oninput="setCustomValidity('')">
										<b class="tooltip tooltip-top-right">
											<i class="fa fa-user txt-color-teal"></i>Vui lòng nhập email đăng nhập</b>
									</label>
								</section>
								<section>
									<label class="label">Mật khẩu</label>
									<label class="input">
										<i class="icon-append fa fa-lock"></i>
										<input type="password" name="password" required="" oninvalid="this.setCustomValidity('Vui lòng mật khẩu')"
										oninput="setCustomValidity('')">
										<b class="tooltip tooltip-top-right">
											<i class="fa fa-lock txt-color-teal"></i> Nhập mật khẩu của bạn</b>
									</label>
								</section>
							</fieldset>
							<footer>
								<input type="submit" class="btn btn-primary" value="Đăng nhập">
							</footer>
						</form>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!--================================================== -->


	<script> if (!window.jQuery) { document.write('<script src="{!! asset('public/admin/assets') !!}/js/data/jquery-2.1.1.min.js"><\/script>'); } </script>


	<script> if (!window.jQuery.ui) { document.write('<script src="{!! asset('public/admin/assets') !!}/js/data/jquery-ui-1.10.3.min.js"><\/script>'); } </script>

	<!-- IMPORTANT: APP CONFIG -->
	<script src="{!! asset('public/admin/assets') !!}/js/data/app.config.js"></script>

	<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

	<!-- BOOTSTRAP JS -->
	<script src="{!! asset('public/admin/assets') !!}/js/data/bootstrap.min.js"></script>

	<!--[if IE 8]>

			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->


	<script type="text/javascript">
		runAllForms();

		$(function () {
			// Validation
			$("#login-form").validate({
				// Rules for form validation
				rules: {
					email: {
						required: true,
						email: true
					},
					password: {
						required: true,
						minlength: 3,
						maxlength: 20
					}
				},

				// Messages for form validation
				messages: {
					email: {
						required: 'Please enter your email address',
						email: 'Please enter a VALID email address'
					},
					password: {
						required: 'Please enter your password'
					}
				},

				// Do not change code below
				errorPlacement: function (error, element) {
					error.insertAfter(element.parent());
				}
			});
		});
	</script>
	<!-- Your GOOGLE ANALYTICS CODE Below -->
	<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-43548732-3']);
		_gaq.push(['_trackPageview']);

		(function () {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();

	</script>

</body>

</html>