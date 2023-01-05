<?php

namespace Bramatom\LaravelSellingPartnerAmazon;

use Bramatom\SellingPartnerAmazon\AmazonMarketPlace;
use Bramatom\SellingPartnerAmazon\AmazonMarketPlaceKey;
use Illuminate\Support\Facades\Config;

class AmazonClient
{
    public AmazonMarketPlaceKey $key;
    /**
     * @throws \Exception
     */
    public function __construct()
    {
        $this->key = AmazonMarketPlaceKey::create(
            Config::get('laravel-selling-partner-amazon.marketplace_id'),
            Config::get('laravel-selling-partner-amazon.secret_key'),
            Config::get('laravel-selling-partner-amazon.access_key'),
            Config::get('laravel-selling-partner-amazon.seller_id'),
            Config::get('laravel-selling-partner-amazon.sandbox')
        );
    }
}