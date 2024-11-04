<?php

namespace App\Providers;

use App\Response\ResponseHandler;
use Illuminate\Http\Resources\Json\JsonResource;
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
        // Register the response macros
        new ResponseHandler();
        JsonResource::withoutWrapping();
    }
}
