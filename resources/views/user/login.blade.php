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
		#left
		{
			background-color: #344;
			color: #fff;
			min-width: 137px;
		}
		#right
		{
			min-width: 420px;
		}
		#navlogo
		{
			width: 150px;
			height: 40px;
		}
		@media(max-width: 590px)
		{
			#left
			{
				display: none;
			}
		}
		#user-logined
		{
			color: #fff;
		}
		.dropdown-menu
		{
			right: 0px;
		}
		.x
		{
			background-color: #f74;
		}
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

	<!-- navigation bar -->
	<section>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="{{ url('posts') }}">
		  	<img src="{{ url('images/blog4.png') }}" id="navlogo" class="rounded">
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="{{ url('posts') }}">Home <span class="sr-only">(current)</span></a>
		      </li>
		    </ul>
		  </div>
		</nav>
	</section>
	<!-- end navigation bar -->

	<section class="all x text-center">
			<form class="" method="POST" action="{{ url('/login') }}">
				@csrf()
				<h2>User Login</h2>

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