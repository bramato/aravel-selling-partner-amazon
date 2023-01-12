<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
            Schema::create('amsp-order_items', function (Blueprint $table) {
                    $table->increments('id');
                    $table->string('amazon_order_id');
                    $table->text('order_items');
                    $table->string('asin');
                    $table->string('order_item_id');
                    $table->string('seller_sku');
                    $table->string('title');
                    $table->integer('quantity_ordered');
                    $table->integer('quantity_shipped');
                    $table->string('product_info')->nullable();
                    $table->string('points_granted')->nullable();
                    $table->string('item_price')->nullable();
                    $table->string('shipping_price')->nullable();
                    $table->dateTime('scheduled_delivery_end_date');
                    $table->dateTime('scheduled_delivery_start_date');
                    $table->string('cod_fee')->nullable();
                    $table->string('cod_fee_discount')->nullable();
                    $table->boolean('is_gift');
                    $table->boolean('is_transparency');
                    $table->string('gift_message_text')->nullable();
                    $table->string('gift_wrap_price')->nullable();
                    $table->string('gift_wrap_level')->nullable();
                    $table->string('price_designation');
                    $table->timestamps();
            });


    }

    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists( 'amsp-order_items');
    }
};
