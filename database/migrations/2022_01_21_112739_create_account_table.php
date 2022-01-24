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
            $table->string('age');
            $table->string('street');
            $table->string('city');
            $table->string('postal');
            $table->string('phone_number');
            $table->string('mobile_number');
            $table->string('email');
            $table->string('emergency_name');
            $table->string('emergency_number');
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
