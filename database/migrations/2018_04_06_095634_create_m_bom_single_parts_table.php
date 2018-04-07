<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMBomSinglePartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m-bom-single-parts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('m_bom_assy_id')->nullable();
            $table->integer('part_level')->nullable();
            $table->string('part_number')->nullable();
            $table->string('part_nha')->nullable();
            $table->string('part_name')->nullable();
            $table->integer('quantity_part_per_sheet')->nullable();
            $table->string('part_uom')->nullable();
            $table->string('part_type')->nullable();
            $table->integer('koding_id')->nullable();
            $table->string('make')->nullable();
            $table->string('part_symbol')->nullable();
            $table->integer('part_changes')->nullable();
            $table->integer('part_material_id')->nullable();
            $table->string('part_serial_number')->nullable();
            $table->decimal('quantity_part_thickness')->nullable();
            $table->decimal('quantity_part_width')->nullable();
            $table->decimal('quantity_part_length')->nullable();
            $table->decimal('quantity_part_diameter')->nullable();
            $table->decimal('quantity_part_weight')->nullable();
            $table->string('material_specification')->nullable();
            $table->decimal('quantity_material')->nullable();
            $table->decimal('quantity_kg_pcs')->nullable();
            $table->decimal('part_ratio')->nullable();
            $table->string('dim_uom')->nullable();
            $table->string('weight_uom')->nullable();
            $table->string('remark')->nullable();
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
        Schema::dropIfExists('m-bom-single-part');
    }
}
