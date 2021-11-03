<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaleProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_products', function (Blueprint $table) {
            $table->uuid('id')
                ->primary();
            $table->string('sale_id');
            $table->foreign('sale_id')
                ->references('id')
                ->on('sales');
            $table->string('product_id');
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->integer('quantity');
            $table->double('value', 15, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_products');
    }
}
