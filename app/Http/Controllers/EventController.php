<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Support\Facades\File;

class EventController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the events dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events', [
            'events' => Event::where('is_active', true)->paginate(10),
        ]);
    }

    /**
     * Show the event dashboard.
     *
     * @param Event $event
     * @return \Illuminate\Http\Response
     */
    public function event(Event $event)
    {
        // dima Make Cache "images" !?
        $files = File::allFiles('../public/img/events/' . $event->url);
        $images = [];

        foreach ($files as $f => $file) {
            $images[] = $files[$f]->getFilename();
        }

        return view('event', [
            'event' => $event,
            'images' => $images,
        ]);
    }
}
