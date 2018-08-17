<?php

namespace App\Http\Controllers;

use App\Event;
use App\Festival;
use App\Subscriber;
use App\Tiding;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'sub_email' => [
                'required',
                'string',
                'email',
                'min:3',
                'max:255',
                Rule::unique('subscribers')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
        ]);

        Subscriber::create(['sub_email' => $request->sub_email]);

        return back()->with(['status' => __('You have successfully subscribed to the newsletter!')]);
    }
}
