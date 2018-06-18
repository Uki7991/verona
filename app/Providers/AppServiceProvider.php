<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\App;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $app = App::find(1);
        view()->share([
            'app' => $app,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
