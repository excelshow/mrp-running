<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales-order-item', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sales_order_id')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_name')->nullable();
            $table->string('make')->nullable();
            $table->integer('koding_id')->nullable();
            $table->string('order_quantity')->nullable();
            $table->string('order_uom')->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('total_price')->nullable();
            $table->string('tax')->nullable();
            $table->string('discount')->nullable();
            $table->string('material_length')->nullable();
            $table->string('material_width')->nullable();
            $table->string('material_weight')->nullable();
            $table->string('material_specification')->nullable();
            $table->string('part_quantity')->nullable();
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
        Schema::dropIfExists('sales-order-item');
    }
}
