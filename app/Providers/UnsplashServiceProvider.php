<?php

namespace App\Providers;

use Unsplash\HttpClient;
use Illuminate\Support\ServiceProvider;

class UnsplashServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        HttpClient::init([
            'applicationId' => env('UNSPLASH_ACCESS_KEY'),
            'secret' => env('UNSPLASH_SECRET'),
            'callbackUrl' => 'https://your-application.com/oauth/callback',
            'utmSource' => 'NAME OF YOUR APPLICATION',
        ]);
    }
}
