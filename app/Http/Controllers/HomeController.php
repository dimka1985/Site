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
            'festivals' => Festival::where('is_active', true)->take(3)->get(),
            'events' => Event::where('is_active', true)->take(8)->get(),
            'news' => Tiding::where('is_active', true)->take(3)->get(),
        ]);
    }
}
