<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Userregisters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userregisters', function($table)
        {
            $table->increments('id');
            $table->string('first_name', 128);
            $table->string('last_name', 128);
            $table->string('user_name', 128);
            $table->string('password', 128);
            $table->string('email', 128);
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
        Schema::drop('userregisters');
    }
}