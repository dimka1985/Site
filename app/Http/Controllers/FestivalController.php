<?php

namespace App\Http\Controllers;

use App\Festival;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class FestivalController extends Controller
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
     * Show the festivals dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all_festivals', [
            'festivals' => Festival::where('is_active', true)->orderBy('id', 'desc')->paginate(5),
        ]);
    }

    /**
     * Show the festival dashboard.
     *
     * @param Festival $festival
     * @return \Illuminate\Http\Response
     */
    public function festival(Festival $festival)
    {
        if ($festival->passed == true) {
            $images = Cache::rememberForever('festivals_' . $festival->url, function () use ($festival) {
                $files = File::allFiles('../public/img/festivals/' . $festival->url);
                $images = [];

                foreach ($files as $f => $file) {
                    $images[] = $files[$f]->getFilename();
                }

                return $images;
            });

            return view('festival', [
                'festival' => $festival,
                'images' => $images,
            ]);
        } else {
            return view('active_festivals.' . $festival->url, [
                'festival' => $festival,
            ]);
        }
    }

    /**
     * Show the festival participate dashboard.
     *
     * @param Festival $festival
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function participate(Festival $festival)
    {
        if ($festival->passed == false) {
            return view('active_festivals.' . $festival->url . '_participate', [
                'festival' => $festival,
            ]);
        } else {
            return back()->with('warning', __('This festival has already passed'));
        }
    }

    /**
     * Show the festival visit dashboard.
     *
     * @param Festival $festival
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function visit(Festival $festival)
    {
        if ($festival->passed == false) {
            return view('active_festivals.' . $festival->url . '_visit', [
                'festival' => $festival,
            ]);
        } else {
            return back()->with('warning', __('This festival has already passed'));
        }
    }

    /**
     * Show the festival award dashboard.
     *
     * @param Festival $festival
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function award(Festival $festival)
    {
        return view('awards.' . $festival->url . '_award', [
            'festival' => $festival,
        ]);
    }
}
