<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BasketServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BasketInterfaceRepository::class, BasketSessionRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
