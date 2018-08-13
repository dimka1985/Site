<?php

namespace App\Http\Controllers;

use App\Event;
use App\Festival;
use App\Tiding;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'festivals' => Festival::latest()->take(3)->get(),
            'events' => Event::latest()->take(16)->get(),
            'news' => Tiding::latest()->take(3)->get(),
        ]);
    }
}
