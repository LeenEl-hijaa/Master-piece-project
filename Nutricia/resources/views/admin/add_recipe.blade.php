@extends('admin.layout.master')
@section('content')
<form class="m-5" enctype="multipart/form-data" action="add_category" method="POST">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @csrf
    <h2>Add Recipe</h2>
<div class="row">
    <div class="form-group col-8">
        <input type="text" name="name" class="form-control" placeholder="Recipe Name">
    </div>
    <div class="form-group col-8">
        <input type="file" name="image" class="form-control"placeholder="Recipe Name">
    </div>
    <div class="form-group col-8">
        <input type="text" name="description" class="form-control" placeholder="Recipe Description">
    </div>
    <div class="form-group col-8">
        <input type="submit" class="btn btn-primary" value="Add">
    </div>


</div>
</form>
@endsection