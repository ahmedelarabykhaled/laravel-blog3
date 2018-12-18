@extends('layouts.admin')
@section('title')

Blog Users

@stop
@section('test_active')

{{session(['dashboard'=>''])}}
{{session(['posts'=>''])}}
{{session(['comments'=>''])}}
{{session(['users'=>'active'])}}
{{session(['admins'=>''])}}
{{session(['categories'=>''])}}
{{session(['profile'=>''])}}

@stop
@section('style')

#add-form form
{
    border: #08f 2px solid;
    min-width: 250px;
}
.card-small
{
    overflow-x: scroll;
}

@stop
@section('content')


<div class="col-lg-9 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Users <button id="add-btn" class="float-right btn btn-success">Add User</button></h6>
        </div>
        <div class="card-body pt-0">
            <div>
            	<table class="table my-4 table-borderless table-hover">
            		<thead class="">
            			<th>user name :</th>
            			<th>user mail :</th>
                        <th class="text-center">posts :</th>
                        <th class="text-center">comments :</th>
                        <th>Action :</th>
            		</thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center">{{$user->posts->count()}}</td>
                                <td class="text-center">{{$user->comments->count()}}</td>
                                <td>
                                <form method="POST" action="{{url('admin/users',$user->id)}}">
                                    @csrf()
                                    @method('DELETE')
                                    <button class="btn-danger btn">Delete</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
            	</table>
                <div id="add-form" class="m-3">
                    <form class="w-50 p-3 rounded m-auto" method="POST" action="{{url('admin/users')}}">
                        @csrf()
                        <h3 class="text-center">Add User</h3>
                        <input type="text" name="name" placeholder="user name" class="form-control my-3">
                        <input type="email" name="email" placeholder="user email" class="form-control my-3">
                        <input type="password" name="password" placeholder="user password" class="form-control my-3">
                        <button class="btn btn-success">Add User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
@section('js')
    $('#add-form').css('display','none')
    $('#add-btn').click(function(){
    $('#add-form').slideToggle(500);
})
@stop
