<?php

use Bramatom\SellingPartnerAmazon\AmazonMarketplaceZone;

return [
    'sandbox' => env('AMAZON_SELLING_PARTNER_SANDBOX', true),
    'client_id' => env('AMAZON_SELLING_PARTNER_CLIENT_ID'),
    'client_secret' => env('AMAZON_SELLING_PARTNER_CLIENT_SECRET'),
    'marketplace_id' => env('AMAZON_SELLING_PARTNER_MARKETPLACE_ID', \Bramatom\SellingPartnerAmazon\AmazonMarketplaceId::EUROPE_ITALY)
];