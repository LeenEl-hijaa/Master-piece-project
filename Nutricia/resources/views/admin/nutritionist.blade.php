@extends('admin.layout.master')
@section('content')

<div class="table m-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <a href="/add_nutritionist" class="btn btn-primary m-3"> Add Nutritionist</a>
                <thead>
                    <tr>
                        <th>Nutritionist Image</th>
                        <th>Nutritionist Name</th>
                        <th>Nutritionist Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ntritionists as $item)
                        <tr>
                            <td>
                                <img src="{{$item->nutritionist_image}}" width="150px" height="150px" alt="">
                            </td>
                            <td>{{$item->nutritionist_name}}</td>
                            <td>{{$item->nutritionist_description}}</td>
                            <td>
                                <a href="update_nutritionist/{{$item->id}}" class="btn btn-primary "> Update</a>
                                <a href="delete_nutritionist/{{$item->id}}" class="btn btn-primary "> Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
