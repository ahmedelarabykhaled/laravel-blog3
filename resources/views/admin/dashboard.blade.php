@extends('layouts.admin')
@section('title')

Blog Overview

@stop
@section('test_active')

{{session(['dashboard'=>'active'])}}
{{session(['posts'=>''])}}
{{session(['comments'=>''])}}
{{session(['users'=>''])}}
{{session(['admins'=>''])}}
{{session(['categories'=>''])}}
{{session(['profile'=>''])}}

@stop
@section('content')



<div class="col-lg-9 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Satisfy</h6>
        </div>
        <div class="card-body pt-0">
            <div>
            	<table class="table my-4 table-borderless table-hover">
            		<thead class="border">
            			<th>table name :</th>
            			<th>number :</th>
            		</thead>
            		<tr>
            			<td>Admins</td>
            			<td>{{$admins->count()}}</td>
            		</tr>
            		<tr>
            			<td>Users</td>
            			<td>{{$users->count()}}</td>
            		</tr>
            		<tr>
            			<td>Posts</td>
            			<td>{{$posts->count()}}</td>
            		</tr>
            		<tr>
            			<td>Comments</td>
            			<td>{{$comments->count()}}</td>
            		</tr>
            		<tr>
            			<td>Images</td>
            			<td>{{$images->count()}}</td>
            		</tr>
            	</table>
            </div>
        </div>
    </div>
</div>

@stop

