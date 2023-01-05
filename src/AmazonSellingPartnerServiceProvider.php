<?php

namespace Bramatom\LaravelSellingPartnerAmazon;

use Bramatom\LaravelSellingPartnerAmazon\Facades\AmazonSellingPartner;
use Illuminate\Support\ServiceProvider as ServiceProviderAlias;

class AmazonSellingPartnerServiceProvider extends ServiceProviderAlias
{
    public function register()
    {
        $this->app->bind('amazon-selling-partner', function ($app) {
            return new AmazonSellingPartner();
        });
    }
}
