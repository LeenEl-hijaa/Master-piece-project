@extends('admin.layout.master')
@section('content')
<form class="m-5" enctype="multipart/form-data" action="/update_nutritionist" method="POST">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    @csrf
    <h2>Add Nutrtionist</h2>
    <input type="hidden" value="{{$nutritionist->id}}" name="id">
<div class="row">
    <div class="form-group col-8">
        <input type="text" name="name" class="form-control" placeholder="nutritionist Name" value="{{$nutritionist->nutritionist_name}}">
    </div>
    <div class="form-group col-8">
        <input type="file" name="image" class="form-control"placeholder="nutritionist Name">
    </div>
    <div class="form-group col-8">
        <input type="text" name="description" class="form-control" placeholder="nutritionist Description" value="{{$nutritionist->nutritionist_description}}">
    </div>
    <div class="form-group col-8">
        <img src="{{$nutritionist->nutritionist_image}}" alt="" width="150px" height="150px">
    </div>
    <div class="form-group col-8">
        <input type="submit" class="btn btn-primary" value="Add">
    </div>


</div>
</form>
@endsection