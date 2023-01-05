<?php

namespace Bramatom\LaravelSellingPartnerAmazon;

use Bramatom\LaravelSellingPartnerAmazon\Facades\AmazonSellingPartner;

class AmazonSellingPartnerServiceProvider
{
    public function register()
    {
        $this->app->bind('amazon-selling-partner', function ($app) {
            return new AmazonSellingPartner();
        });
    }
}
