<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoteltickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('system');
            $table->string('hotel');
            $table->string('city');
            $table->dateTime('check_in');
            $table->dateTime('check_out');
            $table->string("room");
            $table->integer("on_ticket");
            $table->integer("nta");
            $table->integer("commission");
            $table->string('payment');
            $table->string('notes');
            $table->string('sales');
            $table->string('user_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hoteltickets');
    }
}
