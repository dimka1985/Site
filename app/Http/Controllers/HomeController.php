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
            'festivals' => Festival::where('is_active', true)->orderBy('id', 'desc')->take(1)->get(),
            'events'    => Event::where('is_active', true)->orderBy('id', 'desc')->take(8)->get(),
            'news'      => Tiding::where('is_active', true)->orderBy('id', 'desc')->take(3)->get(),
        ]);
    }

    /**
     * Show the advertising dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        return view('terms');
    }

    /**
     * Show the company dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function company()
    {
        return view('company', [
            'festival' => Festival::where([
                ['is_active', true],
                ['passed', false],
            ])->orderBy('id', 'desc')->take(1)->first(),
        ]);
    }

    /**
     * Show the advertising dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function advertising()
    {
        return view('advertising');
    }

    /**
     * Show the promotion dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function promotion()
    {
        return view('promotion');
    }

    /**
     * Show the btl dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function btl()
    {
        return view('btl');
    }

    /**
     * Show the events dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        return view('events', [
            'events' => Event::where('is_active', true)->orderBy('id', 'desc')->take(4)->get(),
        ]);
    }

    /**
     * Show the festivals dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function festivals()
    {
        return view('festivals', [
            'festival' => Festival::where([
                ['is_active', true],
                ['passed', false],
            ])->orderBy('id', 'desc')->take(1)->first(),
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
