@extends('templates.admin-master')

@section('header_content')
<title>Edit Staff</title>
@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title">Edit Staff</h2>
        <form action="{{ url('/staff/'.$staff->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label>Name</label>
                <input type="text" name="name" value="{{ $staff->name }}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Email</label>
                <input type="email" name="email" value="{{ $staff->email }}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Role</label>
                <input type="text" name="role" value="{{ $staff->role }}" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label>Phone</label>
                <input type="text" name="phone" value="{{ $staff->phone }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
