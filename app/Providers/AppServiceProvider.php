<?php

namespace App\Providers;

use App\Services\QueueInjectorService\QueueInjectorService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        QueueInjectorService::boot();
    }
}
