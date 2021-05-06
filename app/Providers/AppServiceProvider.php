<?php

namespace App\Providers;

use Illuminate\Support\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Response::macro('caps', function ($value) {
        //     return Response::make(strtoupper($value));
        // });
        config(['app.locale' => 'id']);
        carbon::setlocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}
