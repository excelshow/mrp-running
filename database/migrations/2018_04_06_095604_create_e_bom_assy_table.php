<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEBomAssyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('e-bom-assy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('master_material_id')->nullable();
            $table->integer('part_level')->nullable();
            $table->string('part_nha')->nullable();
            $table->string('part_name')->nullable();
            $table->integer('quantity_part')->nullable();
            $table->string('part_uom')->nullable();
            $table->string('part_type')->nullable();
            $table->string('part_symbol')->nullable();
            $table->integer('part_changes')->nullable();
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
        Schema::dropIfExists('e-bom-assy');
    }
}
