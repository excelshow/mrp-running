<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work-center', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number')->nullable();
            $table->integer('machine_id')->nullable();
            $table->integer('asset_number')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->integer('location_id')->nullable();
            $table->string('utilization')->nullable();
            $table->integer('total_shift')->nullable();
            $table->string('queue_time')->nullable();
            $table->string('setup_time')->nullable();
            $table->string('execution_time')->nullable();
            $table->string('capacity_time')->nullable();
            $table->string('start_time_1')->nullable();
            $table->string('stop_time_1')->nullable();
            $table->integer('brake_time_1')->nullable();
            $table->string('start_time_2')->nullable();
            $table->string('stop_time_2')->nullable();
            $table->integer('brake_time_2')->nullable();
            $table->string('start_time_3')->nullable();
            $table->string('stop_time_3')->nullable();
            $table->integer('brake_time_3')->nullable();
            $table->integer('total_machine')->nullable();
            $table->integer('total_labor')->nullable();
            $table->string('processing')->nullable();
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
        Schema::dropIfExists('work-center');
    }
}
