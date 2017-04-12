<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('user_id');
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('tel');
            $table->string('adress');
            $table->string('city');
            $table->string('postcode');
            $table->string('country');


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
        Schema::dropIfExists('adresses');
    }
}
