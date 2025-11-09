<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Auth\CustomUserProvider;

class CustomAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::provider('custom_eloquent', function ($app, $config) {
            return new CustomUserProvider($app['hash'], $config['model']);
        });
    }
}