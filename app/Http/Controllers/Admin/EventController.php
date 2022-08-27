<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    protected static $event;

    public function add ()
    {
        return view('admin.event.add');
    }


    public function newEvent(Request $request)
    {
        Event::eventData($request);
        return back()->with('message', 'Event created successfully');
    }

    public function manage()
    {
        return view('admin.event.manage', [
            'events' => Event::all(),
        ]);
    }

    public function editEvent($id)
    {
        return view('admin.event.edit', [
           'event' => Event::find($id),
        ]);
    }

    public function deleteEvent($id)
    {
        self::$event = Event::where('id', $id)->first();
        if (isset(self::$event->image))
        {
            unlink(self::$event->image);
        }
        self::$event->delete();
        return back()->with('message', 'Event deleted successfully');
    }

    public function updateEvent(Request $request, $id)
    {
        Event::eventData($request, $id);
        return redirect('/event-manage')->with('message', 'Event updated successfully');
    }
}
