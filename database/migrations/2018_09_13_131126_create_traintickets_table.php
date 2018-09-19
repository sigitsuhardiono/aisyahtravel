<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traintickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('train');
            $table->string('route');
            $table->dateTime('date_departure');
            $table->integer("pax");
            $table->string("booking_code");
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
        Schema::dropIfExists('traintickets');
    }
}
