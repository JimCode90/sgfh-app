<?php

namespace App\Providers;
use http\Env\Url;
use Illuminate\Support\Facades\App;
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
        if (!App::environment([
            'local',
            'testing',
        ])) {
            URL::forceScheme('https');
        }
    }
}
