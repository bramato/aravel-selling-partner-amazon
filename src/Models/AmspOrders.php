<?php

namespace Bramatom\LaravelSellingPartnerAmazon\Models;


use Bramatom\LaravelSellingPartnerAmazon\Models;
use Illuminate\Database\Eloquent\Model;

class AmspOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amsp-orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'AmazonOrderId',
        'PurchaseDate',
        'LastUpdateDate',
        'OrderStatus',
        'FulfillmentChannel',
        'SalesChannel',
        'ShipServiceLevel',
        'CurrencyCode',
        'Amount',
        'NumberOfItemsShipped',
        'NumberOfItemsUnshipped',
        'PaymentMethod',
        'PaymentMethodDetails',
        'IsReplacementOrder',
        'MarketplaceId',
        'ShipmentServiceLevelCategory',
        'OrderType',
        'EarliestShipDate',
        'LatestShipDate',
        'EarliestDeliveryDate',
        'LatestDeliveryDate',
        'IsBusinessOrder',
        'IsPrime',
        'IsGlobalExpressEnabled',
        'IsPremiumOrder',
        'IsSoldByAB',
        'IsIBA',
        'Name',
        'AddressLine1',
        'City',
        'StateOrRegion',
        'PostalCode',
        'CountryCode',
        'Phone',
        'AddressType',
        'FulfillmentSupplySourceId',
        'IsISPU',
        'IsAccessPointOrder',
        'HasAutomatedShippingSettings',
        'EasyShipShipmentStatus',
        'ElectronicInvoiceStatus',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'PurchaseDate' => 'datetime',
        'LastUpdateDate' => 'datetime',
        'EarliestShipDate' => 'datetime',
        'LatestShipDate' => 'datetime',
        'EarliestDeliveryDate' => 'datetime',
        'LatestDeliveryDate' => 'datetime',
        'IsReplacementOrder' => 'boolean',
        'IsBusinessOrder' => 'boolean',
        'IsPrime' => 'boolean',
        'IsGlobalExpressEnabled' => 'boolean',
        'IsPremiumOrder' => 'boolean',
        'IsSoldByAB' => 'boolean',
        'IsIBA' => 'boolean',
        'IsISPU' => 'boolean',
        'IsAccessPointOrder' => 'boolean',
        'HasAutomatedShippingSettings' => 'boolean',
    ];
    public function orderItems(){
        return $this->hasMany(AmspOrderItems::class, 'amazon_order_id', 'AmazonOrderId');
    }

}
