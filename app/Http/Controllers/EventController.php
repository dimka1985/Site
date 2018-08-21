<?php

namespace App\Http\Controllers;

use App;
use App\Event;
use Illuminate\Support\Facades\Cache;
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
        return view('all_events', [
            'events' => Event::where('is_active', true)->orderBy('id', 'desc')->paginate(5),
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
        $images = Cache::rememberForever('events_' . $event->url, function () use ($event) {
            if (App::environment('production')) {
                $files = File::allFiles('../public_html/img/events/' . $event->url);
            } else {
                $files = File::allFiles('../public/img/events/' . $event->url);
            }

            $images = [];

            foreach ($files as $f => $file) {
                $images[] = $files[$f]->getFilename();
            }

            return $images;
        });

        return view('event', [
            'event' => $event,
            'images' => $images,
        ]);
    }
}
