@extends('layouts.admin')
@section('title')

Blog Comments

@stop
@section('test_active')

{{session(['dashboard'=>''])}}
{{session(['posts'=>''])}}
{{session(['comments'=>'active'])}}
{{session(['users'=>''])}}
{{session(['admins'=>''])}}
{{session(['categories'=>''])}}
{{session(['profile'=>''])}}

@stop
@section('content')


<div class="col-lg-9 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Comments</h6>
        </div>
        <div class="card-body pt-0">
            <div>
            	<table class="table my-4 table-borderless table-hover">
            		<thead class="">
            			<th>Post Title :</th>
            			<th>Comment Body :</th>
                        <th>Comment Owner :</th>
                        <th>Action :</th>
            		</thead>
                    <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{$comment->post->title}}</td>
                                <td>{{$comment->body}}</td>
                                <td>{{$comment->user->name}}</td>
                                <td>
                                    <form method="POST" action="{{url('admin/comments',$comment->id)}}">
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

