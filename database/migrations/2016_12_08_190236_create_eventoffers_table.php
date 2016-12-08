<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventoffers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('wedding', 1000);
            $table->string('weddingEn', 1000);
            $table->string('teambuilding', 1000);
            $table->string('teambuildingEn', 1000);
            $table->string('conference', 1000);
            $table->string('conferenceEn', 1000);
            $table->string('birthday', 1000);
            $table->string('birthdayEn', 1000);
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
        Schema::drop('eventoffers');
    }
}
