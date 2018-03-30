<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutePartNhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_part_nha', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('bom_id');
            $table->integer('tmmaster_id');
            $table->string('part_number');
            $table->string('next_higher_assy');
            $table->string('unit_of_measure');
            $table->string('part_index');
            $table->string('part_type');
            $table->string('part_class');
            $table->string('plan_type');
            $table->string('shop');
            $table->string('destination_shop');
            $table->boolean('approval_manufacture');
            $table->integer('approve_by_manufacture');
            $table->boolean('approval_quality');
            $table->integer('approve_by_quality');
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
        Schema::dropIfExists('route_part_nha');
    }
}
