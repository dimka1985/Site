<?php

namespace App\Http\Controllers;

use App\Tiding;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
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
     * Show the news dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('all_news', [
            'news' => Tiding::where('is_active', true)->orderBy('id', 'desc')->paginate(5),
        ]);
    }

    /**
     * Show the tiding dashboard.
     *
     * @param Tiding $tiding
     * @return \Illuminate\Http\Response
     */
    public function tiding(Tiding $tiding)
    {
        $images = Cache::rememberForever('news_' . $tiding->url, function () use ($tiding) {
            $files = File::allFiles('../public/img/news/' . $tiding->url);
            $images = [];

            foreach ($files as $f => $file) {
                $images[] = $files[$f]->getFilename();
            }

            return $images;
        });

        return view('tiding', [
            'tiding' => $tiding,
            'images' => $images,
        ]);
    }
}
