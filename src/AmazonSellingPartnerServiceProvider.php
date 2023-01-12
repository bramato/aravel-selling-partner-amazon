<?php

namespace Bramatom\LaravelSellingPartnerAmazon;

use Bramatom\LaravelSellingPartnerAmazon\Facades\AmazonSellingPartner;
use Illuminate\Support\ServiceProvider;

class AmazonSellingPartnerServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/../config/laravel-selling-partner-amazon.php' => config_path('laravel-selling-partner-amazon.php'),
        ], 'config');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-selling-partner-amazon.php', 'laravel-selling-partner-amazon');

        $this->app->singleton('amazon-selling-partner', function () {
            return new AmazonSellingPartner();
        });
    }
}
