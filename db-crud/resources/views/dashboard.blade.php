@extends('templates.admin-master')

@section('header_content')
<title>Dashboard</title>
@endsection

@section('content')
<div class="row mb-4">
    <!-- Overview Box -->
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h4>Total Events</h4>
                <p class="display-5">{{ \App\Models\Event::count() }}</p>
            </div>
        </div>
    </div>
    <!-- Upcoming Events Box -->
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h4>Upcoming Events</h4>
                <p class="display-5">
                    {{ \App\Models\Event::where('event_date', '>=', now())->count() }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Events Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <h2 class="card-title">All Events</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Priority</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach(\App\Models\Event::all() as $event)
                <tr>
                    <td>{{ $event->name }}</td>
                    <td>{{ $event->description }}</td>
                    <td>{{ $event->priority }}</td>
                    <td>{{ $event->event_date }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
