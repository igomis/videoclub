<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table)
        {
            $table->increments('id');
            $table->integer('id_movie')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->date('dateRent')->nullable();
            $table->date('dateReturn')->nullable();
            $table->foreign('id_movie')->references('id')->on('movies')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign('id_user')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rents');
    }
}
