<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master-materials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('material_number')->nullable();
            $table->string('material_name')->nullable();
            $table->integer('material_id')->nullable();
            $table->integer('part_class_id')->nullable();
            $table->string('material_uom')->nullable();
            $table->string('part_symbol')->nullable();
            $table->string('part')->nullable();
            $table->integer('koding_id')->nullable();
            $table->string('make')->nullable();
            $table->string('part_serial_number')->nullable();
            $table->string('quantity_part_thickness')->nullable();
            $table->string('quantity_part_width')->nullable();
            $table->string('quantity_part_length')->nullable();
            $table->string('quantity_part_diameter')->nullable();
            $table->string('quantity_part_weight')->nullable();
            $table->string('dimesion_uom')->nullable();
            $table->string('weight_uom')->nullable();
            $table->string('material_specification')->nullable();
            $table->string('quantity_part_material')->nullable();
            $table->integer('store_id')->nullable();
            $table->string('bin_location')->nullable();
            $table->string('remark')->nullable();
            $table->string('status')->nullable();
            $table->boolean('is_approved')->nullable()->default(false);
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
        Schema::dropIfExists('master-materials');
    }
}
