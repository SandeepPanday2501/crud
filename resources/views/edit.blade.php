@extends('layout.nav')
@section('content')
<form action="{{route('update')}}" method="post">
    @csrf
    <div class="container  shadow p-3 mb-5 mt-2 bg-body rounded" style="width:500px;">
        <h2 class="text-center">Edit Student</h2>
        <div class="mb-3">
            <input type="hidden" name="id" value="{{$data->id}}" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{$data->name}}" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" value="{{$data->address}}"
                id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact</label>
            <input type="text" name="contact" class="form-control" value="{{$data->contact}}"
                id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Department</label>
            <input type="text" name="department" class="form-control" value="{{$data->department}}"
                id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post</label>
            <input type="text" name="post" class="form-control" value="{{$data->post}}" id="exampleFormControlInput1">
        </div>
        <button type="submit" class="btn btn-secondary form-control">Edit</button>
    </div>
</form>
@endsection