<!DOCTYPE html>
<html>
<head>

	<title>.Blog</title>
	<link rel="icon" href="{{ url('images/b.png') }}" type="image/png">

	<link rel="stylesheet" type="text/css" href="{{ url('css/main resources/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/main resources/fontawesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/css/owl.theme.default.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/css/style.css') }}">

	<style type="text/css">
		@yield('style')
		form
		{
			min-width: 400px;
		}
		.all p
		{
			text-align: left;
		}
		.all div
		{
			width: 400px;
		}
		.all
		{
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: #f74;
		}
		.btn
		{
			background-color: #344;
			color: white;
		}
		body
		{
			overflow: hidden;
		}
	</style>
</head>
<body>


	<section class="all text-center">
			<form class="" method="POST" action="{{ url('/adminlogin') }}">
				<h2>Admin Login</h2>
				@csrf()

				<p>E-mail : </p>
				<input type="email" name="email" class="form-control">

				<p>Password : </p>
				<input type="password" name="password" class="form-control">

				<div class="text-center">
					<button class="btn my-4 px-5">Login</button>
				</div>
			</form>
	</section>

	

	<script type="text/javascript" src="{{ url('js/main resources/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/main resources/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/main resources/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/js/mine.js') }}"></script>
	<script type="text/javascript">
		console.log($(document).innerHeight());

		$('.all').css('height',$(document).innerHeight())
	</script>
</body>
</html>