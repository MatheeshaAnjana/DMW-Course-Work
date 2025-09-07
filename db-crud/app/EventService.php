<?php
namespace App;

use App\Models\Event;
use Carbon\Carbon;

class EventService
{
    public function getAll()
    {
        return Event::orderBy('event_date', 'desc')->get();
    }

    public function findById($id)
    {
        return Event::find($id);
    }

    public function store(array $data)
    {
        // returns created Event model
        return Event::create($data);
    }

    public function update($id, array $data)
    {
        $event = Event::find($id);
        if (! $event) return false;
        return $event->update($data);
    }

    public function delete($id)
    {
        $event = Event::find($id);
        if (! $event) return false;
        $event->delete();
        return true;
    }

    public function countAll()
    {
        return Event::count();
    }

    public function getUpcoming($limit = 5)
    {
        $today = Carbon::today()->toDateString();
        return Event::where('event_date', '>=', $today)
                    ->orderBy('event_date', 'asc')
                    ->limit($limit)
                    ->get();
    }
}
