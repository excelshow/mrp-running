<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-kurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('currency')->nullable();
            $table->string('date')->nullable();
            $table->string('sell')->nullable();
            $table->string('middle')->nullable();
            $table->string('buy')->nullable();
            $table->string('user_id_created')->nullable();
            $table->string('user_id_updated')->nullable();
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
        Schema::dropIfExists('master-kurs');
    }
}
