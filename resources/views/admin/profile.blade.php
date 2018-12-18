@extends('layouts.admin')
@section('title')

Admin Profile

@stop
@section('test_active')

{{session(['dashboard'=>''])}}
{{session(['posts'=>''])}}
{{session(['comments'=>''])}}
{{session(['users'=>''])}}
{{session(['admins'=>''])}}
{{session(['categories'=>''])}}
{{session(['profile'=>'active'])}}

@stop

@section('content')
<div class="col-lg-9 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">My Profile</h6>
        </div>
        <div class="card-body pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 p-3">
                        <p>your name : {{$admin->name}}</p>
                        <p>Your email : {{$admin->email}}</p>
                        <p>Your joined at :{{$admin->created_at}}</p>
                    </div>
                    <div class="col-sm-6 text-center">
                        @if($admin->image != null)
                            <img src="{{url('admins',$admin->image->image_name)}}" class="w-100">
                        @else
                            <img src="{{url('images/no admin.png')}}">
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop