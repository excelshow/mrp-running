<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-machines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('number')->nullable();
            $table->string('name')->nullable();
            $table->integer('total_machine')->nullable();
            $table->integer('total_shift')->nullable();
            $table->integer('employee_leader_id')->nullable();
            /*$table->integer('employee_leader_id')->unsigned();
            $table->foreign('employee_leader_id')->references('id')->on('master-labors');*/
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
        Schema::dropIfExists('master-machines');
    }
}
