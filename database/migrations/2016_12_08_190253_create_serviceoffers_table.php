<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiceoffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceoffer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ski', 1000);
            $table->string('skiEn', 1000);
            $table->string('golf', 1000);
            $table->string('golfEn', 1000);
            $table->string('ride', 1000);
            $table->string('rideEn', 1000);
            $table->string('raft', 1000);
            $table->string('raftEn', 1000);
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
        Schema::drop('serviceoffer');
    }
}
