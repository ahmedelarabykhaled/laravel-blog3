@extends('layouts.user')
@section('style')
.card
{
	border: 2px #344 solid;
}
.card-header
{
	border-bottom: 2px #f74 solid;
}
#title
{
	font-weight: 800;
}
.btn
{
	background-color: #f74;
}
@endsection
@section('content')

<div class="card mb-5">
	<div class="text-center card-header">
		<h4 class="p-3" id="title">ADD POST</h4>
	</div>
	<div class="card-body">
		@foreach($errors->all() as $error)
			<div class="alert alert-danger" role="alert">
			  {{$error}}
			</div>
		@endforeach
		<form class="m-3 p-3" method="POST" action="{{ url('posts') }}" enctype="multipart/form-data">
			@csrf()
			<h4>Title :</h4>


			<input type="text" name="title" class="form-control mb-4">

			<h4>Content :</h4>
			<textarea type="text" name="body" class="form-control mb-4"></textarea>

			<h4>Category :</h4>
			<select name="category" class="form-control mb-4">
			  @foreach($categories as $category)
			  	<option value="{{$category->id}}">{{$category->category}}</option>
			  @endforeach
			</select>

			<h4>Image :</h4>
			<input type="file" name="image[]" class=" mb-4" multiple>

			<div class="text-center">
				<button class="btn px-5" type="submit">ADD</button>
			</div>
		</form>
	</div>
</div>



@endsection