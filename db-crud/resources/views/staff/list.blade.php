@extends('templates.admin-master')

@section('header_content')
<title>Staff List</title>
@endsection

@section('content')
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title">Manage Staff</h2>
        <a href="{{ url('/staff/create')}}" class="btn btn-success mb-3">Add New Staff</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($staff as $member)
                <tr>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->role }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>
                        <a href="{{ url('/staff/'.$member->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                        <form action="{{ url('/staff/'.$member->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
