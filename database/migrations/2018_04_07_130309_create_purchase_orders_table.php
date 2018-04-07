<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase-orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->nullable();
            $table->string('request_number')->nullable();
            $table->decimal('unit_price')->nullable();
            $table->decimal('discount')->nullable();
            $table->decimal('tax')->nullable();
            $table->decimal('quantity_order', 6)->nullable();
            $table->decimal('total_price', 17, 2)->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('order_date')->nullable();
            $table->string('delivery_date')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_approved')->nullable()->default(false);
            $table->string('approved_date')->nullable();
            $table->integer('user_id_created')->nullable();
            $table->integer('user_id_updated')->nullable();
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
        Schema::dropIfExists('purchase-orders');
    }
}
