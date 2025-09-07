<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventService;

class EventController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function index()
    {
        $events = $this->eventService->getAll();
        return view('events.list', compact('events'));
    }

    public function create()
    {
        return view('events.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|string|max:50',
            'event_date' => 'required|date',
        ]);

        $this->eventService->store($data);

        return redirect('/events')->with('success', 'Event created successfully.');
    }

    public function edit($id)
    {
        $event = $this->eventService->findById($id);
        if (! $event) {
            return redirect('/events')->with('error', 'Event not found.');
        }
        return view('events.edit', compact('event'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'priority' => 'required|string|max:50',
            'event_date' => 'required|date',
        ]);

        $this->eventService->update($id, $data);

        return redirect('/events')->with('success', 'Event updated successfully.');
    }

    public function destroy($id)
    {
        $this->eventService->delete($id);
        return redirect('/events')->with('success', 'Event deleted.');
    }
}
