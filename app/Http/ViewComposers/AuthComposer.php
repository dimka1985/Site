<?php

namespace App\Http\ViewComposers;

use App\Socialprovider;
use Illuminate\View\View;

class AuthComposer
{
    /**
     * The user repository implementation.
     *
     * @var Socialprovider
     */
    protected $socialproviders;

    /**
     * Create a new profile composer.
     *
     * @param  Socialprovider $socialproviders
     * @return void
     */
    public function __construct(Socialprovider $socialproviders)
    {
        $this->socialproviders = $socialproviders;
    }

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('socialproviders', $this->socialproviders->where('is_active', true)->get());
    }
}
