<?php

namespace App\Providers;

use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Html;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Html::macro('linkWithHtml', function ($url, $html, $attributes = []) {
            $text = '';

            foreach ($attributes as $attr => $value) {
                if (!is_int($attr)) {
                    $text .= ' ' . $attr . '="' . $value . '"';
                } else {
                    $text .= ' ' . $value;
                }
            }

            return '<a href="' . $url . '"' . $text . '>' . $html . '</a>';
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() !== 'production') {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }
}
