<?php

namespace Bramatom\LaravelSellingPartnerAmazon\Facades;

use Illuminate\Support\Facades\Facade;

class AmazonSellingPartner extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'amazon-selling-partner';
    }

}
