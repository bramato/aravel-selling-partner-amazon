<?php

namespace Bramatom\LaravelSellingPartnerAmazon\Models;


use Bramatom\LaravelSellingPartnerAmazon\Models;
use Illuminate\Database\Eloquent\Model;

class AmspOrderItems extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'amsp-order_item';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amazon_order_id',
        'order_items',
        'asin',
        'order_item_id',
        'seller_sku',
        'title',
        'quantity_ordered',
        'quantity_shipped',
        'product_info',
        'points_granted',
        'item_price',
        'shipping_price',
        'scheduled_delivery_end_date',
        'scheduled_delivery_start_date',
        'cod_fee',
        'cod_fee_discount',
        'is_gift',
        'is_transparency',
        'gift_message_text',
        'gift_wrap_price',
        'gift_wrap_level',
        'price_designation',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'scheduled_delivery_end_date' => 'datetime',
        'scheduled_delivery_start_date' => 'datetime',
        'is_gift' => 'boolean',
        'is_transparency' => 'boolean',
    ];
    public function order(){
        return $this->belongsTo(AmspOrderItems::class, 'AmazonOrderId', 'amazon_order_id');
    }

}
