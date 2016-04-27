<?php

namespace App\Providers;

use App\BarFooConverter;
use App\EnquiryEvent;
use App\FooBarConverter;
use App\SearchEvent;
use App\ShowEvent;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(SearchEvent::class, function ($app) {
            return new SearchEvent(new FooBarConverter());
        });
        $this->app->singleton(ShowEvent::class, function ($app) {
            return new ShowEvent(new BarFooConverter());
        });
        $this->app->singleton(EnquiryEvent::class, function ($app) {
            return new EnquiryEvent(new FooBarConverter());
        });
    }
}
