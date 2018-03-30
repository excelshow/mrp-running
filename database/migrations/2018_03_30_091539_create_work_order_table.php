<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work-order', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_part_next_higher_assy')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_next_high_assy')->nullable();
            $table->integer('route_revisi')->nullable();
            $table->integer('part_id')->nullable();
            $table->string('part_serial_number')->nullable();
            $table->string('part_name')->nullable();
            $table->string('unit_of_measure')->nullable();
            $table->string('shop')->nullable();
            $table->string('shop_destination')->nullable();
            $table->integer('quantity_work_order')->nullable();
            $table->date('estimated_start_date')->nullable();
            $table->date('estimated_complation_date')->nullable();
            $table->string('customer_code')->nullable();
            $table->string('work_order_type')->nullable();
            $table->string('work_order_status')->nullable();
            $table->string('no_sales_contract')->nullable();
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
        Schema::dropIfExists('work-order');
    }
}
