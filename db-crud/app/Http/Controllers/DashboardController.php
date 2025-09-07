<?php

namespace App\Http\Controllers;

use App\EventService;

class DashboardController extends Controller
{
    protected $eventService;

    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService;
    }

    public function getPage()
    {
        $events = $this->eventService->getAll();
        $eventCount = $this->eventService->countAll();
        $upcomingEvents = $this->eventService->getUpcoming(5);

        return view('dashboard', compact('events', 'eventCount', 'upcomingEvents'));
    }
}
