<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('birthdate');
            $table->integer('age');
            $table->string('street');
            $table->string('city');
            $table->integer('postal');
            $table->integer('phone_number');
            $table->integer('mobile_number');
            $table->string('email');
            $table->string('emergency_name');
            $table->integer('emergency_number');
            $table->string('emergency_relationship'); 
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
        Schema::dropIfExists('account');
    }
}
