@extends('layouts.admin')
@section('title')

Blog Categories

@stop
@section('test_active')

{{session(['dashboard'=>''])}}
{{session(['posts'=>''])}}
{{session(['comments'=>''])}}
{{session(['users'=>''])}}
{{session(['admins'=>''])}}
{{session(['categories'=>'active'])}}
{{session(['profile'=>''])}}

@stop
@section('style')

#add-form
{
    border-top: 2px #aaa solid;
}

@stop
@section('content')


<div class="col-lg-9 col-md-12 col-sm-12 mb-4">
    <div class="card card-small">
        <div class="card-header border-bottom">
            <h6 class="m-0">Categoories<button class="btn btn-success float-right" id="add-btn">Add Category</button></h6>
        </div>
        <div class="card-body pt-0">
            <div>
            	<table class="table my-4 table-borderless table-hover">
            		<thead class="">
            			<th>Category :</th>
                        <th>Action :</th>
            		</thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category}}</td>
                            <td>
                                <form method="POST" action="{{url('admin/categories',$category->id)}}">
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
                    <form class="w-50 p-3 rounded m-auto" method="POST" action="{{url('admin/categories')}}">
                        @csrf()
                        <h3 class="text-center">Add Category</h3>
                        <input type="text" name="category" placeholder="category" class="form-control my-3">
                        <div class="text-center">
                            <button class="btn btn-success">Add Category</button>
                        </div>
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

