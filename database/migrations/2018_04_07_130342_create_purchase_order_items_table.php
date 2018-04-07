<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchaseOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase-order-items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_order_id')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_nha')->nullable();
            $table->string('part_name')->nullable();
            $table->string('part_uom')->nullable();
            $table->string('material_number')->nullable();
            $table->string('material_name')->nullable();
            $table->decimal('material_length')->nullable();
            $table->decimal('material_width')->nullable();
            $table->decimal('material_thick')->nullable();
            $table->decimal('material_weight')->nullable();
            $table->string('material_specification')->nullable();
            $table->decimal('quantity_material')->nullable();
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
        Schema::dropIfExists('purchase-order-items');
    }
}
