<?php

namespace App\Providers;

use App\View\Components\site\navbar;
use App\View\Components\site\footer;
use App\View\Components\user\sidebar;
use App\View\Components\site\logo;
use Illuminate\Support\Facades\Blade;
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
        Blade::component('navbar', navbar::class);
        Blade::component('footer', footer::class);
        Blade::component('logo', logo::class);
        Blade::component('sidebar', sidebar::class);
    }
}
