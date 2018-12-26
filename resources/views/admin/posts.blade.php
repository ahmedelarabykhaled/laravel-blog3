@extends('layouts.admin')
@section('title')

Blog Posts

@stop
@section('test_active')

{{session(['dashboard'=>''])}}
{{session(['posts'=>'active'])}}
{{session(['comments'=>''])}}
{{session(['users'=>''])}}
{{session(['admins'=>''])}}
{{session(['categories'=>''])}}
{{session(['profile'=>''])}}

@stop
@section('content')


<div class="col-lg-12 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Posts</h6>
        </div>
        <div class="card-body pt-0">
            <div>
            	<table class="table my-4 table-borderless table-hover">
            		<thead class="">
            			<th>Post Title</th>
                        <th>Post Content</th>
            			<th class="text-center">Post Comments</th>
                        <th class="text-center">Post Images</th>
                        <th>Post Owner</th>
                        <th>Action</th>
            		</thead>
                    <tbody>
                        {{$number = 0}}
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>
                                <div class="all-{{$number}}">
                                    <button class="btn btn-warning" onclick="s('{{$number}}')">EDIT
                                    </button>
                                    <p>{!!$post->body!!}</p>
                                </div>
                            </td>
                            <p style="display: none">{{$number++}}</p>
                            
                            <td class="text-center">
                                @if(sizeof($post->comment) > 0)
                                    <p>{{$post->comment->count()}}</p>
                                @else
                                    <p>0</p>
                                @endif
                            </td>
                            <td class="text-center">
                                @if(sizeof($post->image) > 0)
                                    <p>{{$post->image->count()}}</p>
                                @else
                                    <p>0</p>
                                @endif
                            </td>
                            <td>
                                @if($post->user != null)
                                    <p>{{$post->user->name}}</p>
                                @else
                                    <p>none</p>
                                @endif
                            </td>
                            <td>
                                <form method="POST" action="{{url('admin/posts',$post->id)}}">
                                    @csrf()
                                    @method('DELETE')
                                    <button class="btn-danger btn">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
            	</table>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')

<!-- console.log({{$post->id}}) -->

function s(num)
{
    var content = $('.all-'+num+' p').text()
    $('.all-'+num+' button').hide()
    $('.all-'+num+' p').html('<form method="POST" action="{{url('posts',$post->id)}}"><textarea class="mb-3 form-control w-100" name="body">'+content+'</textarea>@csrf()@method('PUT')<button type="submit" class="btn btn-success">OK</button></form>')
}
@stop
