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
.owl-carousel img
{
	max-height: 500px;
	width: auto!important;
}
textarea:focus
{
	box-shadow: 0 0 0 0.2rem rgba(236,119,69,0.5)!important;
	border-color: #f74 !important;
}
.comment-body
{
	border: 1px #ddd solid;
}
#back
{
	font-size:16px;
	color: #f74;
}
@endsection
@section('content')


<div id="show" class="rounded card">
	<div class="card-header p-4">
		<h3>{{$post->title}}<a href="{{url('posts')}}" id="back" class="mx-2">Back</a></h3>
		<p>Category: {{$post->category->category}}</p>
		<p>added by: {{$post->user->name}}</p>

	</div>
	<div class="card-body my-4">
		
	<div class="owl-carousel owl-theme">
		@if($post->image->get(0) != null)
			@foreach($post->image as $image)
				<div class="item">
					<img src="{{ url('upload',$image->image_name) }}" class="m-auto">
				</div>
			@endforeach
	    @endif
	</div>
	<div class="p-4">
		<p>{{$post->body}}</p>
	</div>


	</div>
</div>

@if($post->comment->get(0) != null)
	@foreach($post->comment as $comment)
		<div class="card my-4">
			<div class="card-header p-4">
				<span>added by : </span><h5 class="d-inline">{{$comment->user->name}}</h5>
			</div>
			<div class="card-body">
				<div class="comment-body rounded p-3">
					{{$comment->body}}
				</div>
			</div>
		</div>
	@endforeach
@endif


@if(Auth::check())
<div class="card my-4">
	<div class="card-header p-4">
		<h5>Add Comment</h5>
	</div>
	<div class="card-body">
		<form method="POST" action="{{ url('comment')}}">
			@csrf()
			<input type="hidden" name="post" value="{{$post->id}}">
			<textarea class="form-control" name="body"></textarea>
			<button class="btn btn-warning mt-3" type="submit">Add Comment</button>
		</form>
	</div>
</div>
@endif


@endsection