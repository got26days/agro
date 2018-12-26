<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Footer;
use App\Phone;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::defaultView('providers.default');
        
        Schema::defaultStringLength(191);

        $footer = Footer::latest()->first();
        $phone = Phone::latest()->first();

        view()->share('footer_var', $footer);
        view()->share('phone_var', $phone);
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
