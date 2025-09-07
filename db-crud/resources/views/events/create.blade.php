@extends('templates.admin-master')
@section('header_content')
    <title>Create new event</title>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Create Event</h2>
            <form action="{{ url('/event/store') }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="eventName">Event Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="eventName" placeholder="Enter event name">
                </div>

                <div class="form-group mb-3">
                    <label for="eventDescription">Event Description</label>
                    <textarea name="description" class="form-control" id="eventDescription" rows="3">{{ old('description') }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="eventImportance">Event Importance</label>
                    <select name="priority" class="form-control" id="eventImportance">
                        <option {{ old('priority') == 'High' ? 'selected' : '' }}>High</option>
                        <option {{ old('priority') == 'Medium' ? 'selected' : '' }}>Medium</option>
                        <option {{ old('priority') == 'Low' ? 'selected' : '' }}>Low</option>
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="eventDate">Event Date</label>
                    <input type="date" name="event_date" value="{{ old('event_date') }}" class="form-control" id="eventDate">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
