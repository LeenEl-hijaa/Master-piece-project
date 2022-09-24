@extends('admin.layout.master')
@section('content')
<form class="m-5" enctype="multipart/form-data" action="/update_recipe" method="POST">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @csrf
    <h2>Add Recipe</h2>
    <input type="hidden" value="{{$recipes->id}}" name="id">
<div class="row">
    <div class="form-group col-8">
        <input type="text" name="name" class="form-control" placeholder="Recipe Name" value="{{$recipes->recipe_name}}">
    </div>
    <div class="form-group col-8">
        <input type="file" name="image" class="form-control"placeholder="Recipe Name">
    </div>
    <div class="form-group col-8">
        <input type="text" name="description" class="form-control" placeholder="Recipe Description" value="{{$recipes->recipe_description}}">
    </div>
    <div class="form-group col-8">
        <img src="{{$recipes->recipe_image}}" alt="" width="150px" height="150px">
    </div>
    <div class="form-group col-8">
        <input type="submit" class="btn btn-primary" value="Add">
    </div>


</div>
</form>
@endsection