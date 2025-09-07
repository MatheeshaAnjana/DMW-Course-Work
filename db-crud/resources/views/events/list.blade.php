@extends('templates.admin-master')
@section('header_content')
    <title>Event list</title>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Manage Events</h2>
            <a href="{{ url('/event/create') }}" class="btn btn-success mb-3">Create New Event</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Importance</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($events as $event)
                        <tr>
                            <td>{{ $event->name }}</td>
                            <td>{{ Str::limit($event->description, 80) }}</td>
                            <td>{{ $event->priority }}</td>
                            <td>{{ $event->event_date }}</td>
                            <td>
                                <a href="{{ url('/event/'.$event->id.'/edit') }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ url('/event/'.$event->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Delete this event?')" class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5">No events.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
