<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('sku');
            $table->string('name');
            $table->text('desc')->nullable();
            $table->smallInteger('category_id')->nullable();

            $table->float('price');
            $table->string('size')->nullable();
            $table->string('color')->nullable();
            $table->smallInteger('weight')->nullable();
            $table->smallInteger('stok')->default(0);
            $table->boolean('active')->default(0);
            $table->boolean('feature')->default(0);
            $table->string('image')->nullable();
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
