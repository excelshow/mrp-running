<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillOfMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill-of-materials', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('master_material_id')->nullable();
            $table->integer('part_level')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_next_higher_assy')->nullable();
            $table->string('part_name')->nullable();
            $table->integer('quantity_part')->nullable();
            $table->string('part_uom')->nullable();
            $table->string('part_type')->nullable();
            $table->integer('koding_id')->nullable();
            $table->string('make')->nullable();
            $table->string('part_symbol')->nullable();
            $table->integer('part_changes')->nullable();
            $table->integer('material_id')->nullable();
            $table->string('part_serial_number')->nullable();
            $table->integer('quantity_part_thickness')->nullable();
            $table->integer('quantity_part_width')->nullable();
            $table->integer('quantity_part_length')->nullable();
            $table->integer('quantity_part_diameter')->nullable();
            $table->integer('quantity_part_weight')->nullable();
            $table->string('dimension_uom')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('bill-of-materials');
    }
}
