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
            $table->string('prd_image');
            $table->integer('prd_price');
            $table->integer('prd_warranty');
            $table->string('prd_accessories');
            $table->string('prd_new');
            $table->string('prd_promotion');
            $table->integer('prd_status');
            $table->integer('cat_id')->unsigned();
            $table->text('prd_details');
            $table->tinyInteger('prd_featured');


            $table->foreign('cat_id')
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
