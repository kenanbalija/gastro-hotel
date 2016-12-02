<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('standard_room', 1000);
            $table->string('standard_room_en', 1000);
            $table->string('superior_room', 1000);
            $table->string('superior_room_en', 1000);
            $table->string('deluxe_room', 1000);
            $table->string('deluxe_room_en', 1000);
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
        Schema::drop('rooms');
    }
}
