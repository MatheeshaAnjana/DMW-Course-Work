@extends('templates.admin-master')
@section('header_content')
    <title>Edit event</title>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Edit Event</h2>
            <form action="{{ url('/event/'.$event->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label for="eventName">Event Name</label>
                    <input type="text" name="name" value="{{ old('name', $event->name) }}" class="form-control" id="eventName">
                </div>

                <div class="form-group mb-3">
                    <label for="eventDescription">Event Description</label>
                    <textarea name="description" class="form-control" id="eventDescription" rows="3">{{ old('description', $event->description) }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="eventImportance">Event Importance</label>
                    <select name="priority" class="form-control" id="eventImportance">
                        <option {{ old('priority', $event->priority) == 'High' ? 'selected' : '' }}>High</option>
                        <option {{ old('priority', $event->priority) == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option {{ old('priority', $event->priority) == 'Low' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="eventDate">Event Date</label>
                    <input type="date" name="event_date" value="{{ old('event_date', $event->event_date) }}" class="form-control" id="eventDate">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
