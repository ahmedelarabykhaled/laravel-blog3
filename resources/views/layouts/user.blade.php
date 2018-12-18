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
		.category-item
		{
			font-size: 20px;
			color: #f84;
		}
		.category-item:hover
		{
			color: #f84;
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
		      @if(Auth::check())
			      <li class="nav-item">
			        <a class="nav-link" href="{{ url('posts/create') }}">Add Post</a>
			      </li>
		      @endif
		    </ul>
		  </div>
		  <div class="d-inline">
		  	@if(Auth::check())
		  		<div class="nav-item dropdown">
			        <a id="user-logined" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			         {{Auth::user()->name}}
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="{{ url('logout') }}">Logout</a>
			    	</div>
		  	@else
		  		<ul class="navbar-nav">
			  		<li class="nav-item mx-2">
			  			<a href="{{ url('/login') }}" class="nav-link">login</a>
			  		</li>
			  		<li class="nav-item mx-2">
			  			<a href="{{url('register')}}" class="nav-link">register</a>
			  		</li>
			  	</ul>
		  	@endif
		  </div>
		</nav>
	</section>
	<!-- end navigation bar -->

	<section class="all">
		<div class="container-fluid">
			<div class="row mt-5">
				<div class="col-3">
					<div id="left" class="rounded p-3">
						<a href="{{url('posts')}}" class="d-block category-item">all posts</a>
						<?php
							$categories = \App\Category::get();
							foreach ($categories as $category) {
								echo '<a href="'.url('categoryposts',$category->id).'" class="d-block category-item">'.$category->category.'</a>';
							}
						?>
						@if(Auth::check())
						<a href="{{url('userpost',Auth::user()->id)}}" class="d-block category-item">my posts</a>
						@endif
					</div>
				</div>
				<div class="col-8 mb-5" id="right">
					@yield('content')
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript" src="{{ url('js/main resources/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/main resources/popper.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/main resources/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/js/mine.js') }}"></script>
</body>
</html>