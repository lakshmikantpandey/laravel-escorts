<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Banners;
use Illuminate\Support\Facades\View;

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
        $banners = Banners::orderBy('id', 'DESC')->take(1)->get();
        View::share('banners', $banners);
    }
}
