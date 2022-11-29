@extends('layout.nav')
@section('content')
<form action="{{route('addstu')}}" method="post">
    @csrf
    <div class="container shadow p-3 mb-5 mt-2 bg-body rounded" style="width:500px;">
        <h2 class="text-center">Add Employee</h2>
        <!-- <div class="mb-3">
                 <label for="exampleFormControlInput1" class="form-label">ID</label> 
                <input type="text" name="id" class="form-control" id="exampleFormControlInput1">
            </div>-->
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control  @error('name') is-invalid @enderror"
                id="exampleFormControlInput1">
            @error('name')
            <div class="invalid-feedback">
                name is required
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Address</label>
            <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror"
                id="exampleFormControlInput1">
            @error('address')
            <div class="invalid-feedback">
                address is required
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Contact</label>
            <input type="text" name="contact" class="form-control @error('contact') is-invalid @enderror"
                id="exampleFormControlInput1">
            @error('contact')
            <div class="invalid-feedback">
                contact is required
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Department</label>
            <input type="text" name="department" class="form-control @error('department') is-invalid @enderror"
                id="exampleFormControlInput1">
            @error('department')
            <div class="invalid-feedback">
                department is required
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Post</label>
            <input type="text" name="post" class="form-control @error('department') is-invalid @enderror"
                id="exampleFormControlInput1">
            @error('post')
            <div class="invalid-feedback">
                post is required
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-secondary form-control">SAVE</button>
    </div>
</form>
@endsection