<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakettickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('travel');
            $table->string('address');
            $table->string('destination');
            $table->dateTime('date_departure');
            $table->integer("pax");
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
        Schema::dropIfExists('pakettickets');
    }
}
