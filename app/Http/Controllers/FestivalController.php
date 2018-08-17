<?php

namespace App\Http\Controllers;

use App\Festival;
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
        return view('festivals', [
            'festivals' => Festival::where('is_active', true)->paginate(10),
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
            // dima Make Cache "images" !?
            $files = File::allFiles('../public/img/festivals/' . $festival->url);
            $images = [];

            foreach ($files as $f => $file) {
                $images[] = $files[$f]->getFilename();
            }

            return view('festival', [
                'festival' => $festival,
                'images' => $images,
            ]);
        } else {
            return view('active_festival', [
                'festival' => $festival,
            ]);
        }
    }
}
