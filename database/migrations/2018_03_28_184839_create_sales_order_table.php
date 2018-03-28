<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales-order', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_number')->nullable();
            $table->string('inquiry_type')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_address')->nullable();
            $table->string('customer_director')->nullable();
            $table->string('customer_postal')->nullable();
            $table->string('total_price')->nullable();
            $table->string('tax')->nullable();
            $table->string('discount')->nullable();
            $table->integer('currency_id')->nullable();
            $table->integer('price_date')->nullable();
            $table->integer('delivery_date')->nullable();
            $table->integer('delivery_plant')->nullable();
            $table->integer('delivery_volume')->nullable();
            $table->integer('contract_start')->nullable();
            $table->integer('contract_end')->nullable();
            $table->integer('document_type')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_approve')->nullable()->default(false);
            $table->string('approval_date')->nullable();
            $table->string('status')->nullable();
            $table->string('total_weight')->nullable();
            $table->string('weight_uom')->nullable();
            $table->string('delivery_block')->nullable();
            $table->string('bill_block')->nullable();
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
        Schema::dropIfExists('sales-order');
    }
}
