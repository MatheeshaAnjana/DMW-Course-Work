@extends('templates.admin-master')

@section('header_content')
<title>Add Staff</title>
@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title">Add Staff</h2>
        <form action="{{ url('/staff/store') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Role</label>
                <input type="text" name="role" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>
@endsection
