<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales-contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sales_order_id')->nullable();
            $table->integer('customer_id')->nullable();
            $table->string('contract_number')->nullable();
            $table->string('status')->nullable()->default('open');
            $table->string('contract_from')->nullable();
            $table->string('contract_to')->nullable();
            $table->string('contract_value')->nullable();
            $table->integer('currency_id')->nullable();
            $table->string('project_code')->nullable();
            $table->string('project_name')->nullable();
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
        Schema::dropIfExists('sales-contract');
    }
}
