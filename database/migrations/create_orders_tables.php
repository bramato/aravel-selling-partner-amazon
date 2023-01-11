<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
            Schema::create('amsp-orders', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('AmazonOrderId')->unique();
                $table->timestamp('PurchaseDate')->nullable();
                $table->timestamp('LastUpdateDate')->nullable();
                $table->string('OrderStatus')->nullable();
                $table->string('FulfillmentChannel')->nullable();
                $table->string('SalesChannel')->nullable();
                $table->string('ShipServiceLevel')->nullable();
                $table->string('CurrencyCode')->nullable();
                $table->decimal('Amount', 8, 2)->nullable();
                $table->integer('NumberOfItemsShipped')->nullable();
                $table->integer('NumberOfItemsUnshipped')->nullable();
                $table->string('PaymentMethod')->nullable();
                $table->string('PaymentMethodDetails')->nullable();
                $table->boolean('IsReplacementOrder')->nullable();
                $table->string('MarketplaceId')->nullable();
                $table->string('ShipmentServiceLevelCategory')->nullable();
                $table->string('OrderType')->nullable();
                $table->timestamp('EarliestShipDate')->nullable();
                $table->timestamp('LatestShipDate')->nullable();
                $table->timestamp('EarliestDeliveryDate')->nullable();
                $table->timestamp('LatestDeliveryDate')->nullable();
                $table->boolean('IsBusinessOrder')->nullable();
                $table->boolean('IsPrime')->nullable();
                $table->boolean('IsGlobalExpressEnabled')->nullable();
                $table->boolean('IsPremiumOrder')->nullable();
                $table->boolean('IsSoldByAB')->nullable();
                $table->boolean('IsIBA')->nullable();
                $table->string('Name')->nullable();
                $table->string('AddressLine1')->nullable();
                $table->string('City')->nullable();
                $table->string('StateOrRegion')->nullable();
                $table->string('PostalCode')->nullable();
                $table->string('CountryCode')->nullable();
                $table->string('Phone')->nullable();
                $table->string('AddressType')->nullable();
                $table->string('FulfillmentSupplySourceId')->nullable();
                $table->boolean('IsISPU')->nullable();
                $table->boolean('IsAccessPointOrder')->nullable();
                $table->boolean('HasAutomatedShippingSettings')->nullable();
                $table->string('EasyShipShipmentStatus')->nullable();
                $table->string('ElectronicInvoiceStatus')->nullable();
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
        Schema::dropIfExists( 'amsp-orders');
    }
};
