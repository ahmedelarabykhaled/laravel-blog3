@extends('layouts.user')
@section('style')

.test
{
	background-color: #344;
}
.card-header
{
	border-bottom: #abb 2px solid;
}
.post-image
{
	max-height: 200px;
}
.card-header a
{
	text-decoration: none;
	color: #344;
	font-size: 20px;
	font-weight: 600;
}
.card-header a:hover
{
	text-decoration: underline;
}
.content
{
	max-height: 100px;
	overflow-y : hidden;
}

@endsection
@section('content')


<div class="test rounded p-4">
	@foreach($posts as $post)
	<div class="card my-3">
		<div class="card-header">
			<a href="{{ url('posts',$post->id) }}">{{$post->title}}</a>
		</div>
		<div class="card-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6 text-center">
						@if($post->image->get(0) != null)
							<img src="{{ url('upload',$post->image->get(0)->image_name) }}" class="post-image">
						@else
							<img src="{{ url('images/dummy.jpg') }}" class="w-100">
						@endif
					</div>
					<div class="col-6 content">
						<p>{!!$post->body!!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>




@endsection