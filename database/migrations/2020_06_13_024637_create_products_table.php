<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prd_name');
            $table->double('prd_price')->unsigned();
            $table->integer('prd_warranty');
            $table->tinyInteger('prd_status');
            $table->integer('prd_category')->unsigned();
            $table->text('prd_description');
            $table->tinyInteger('prd_featured');


            $table->foreign('prd_category')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');
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
        Schema::dropIfExists('products');
    }
}
