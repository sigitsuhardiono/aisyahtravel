<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTwoFieldToShipticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('shiptickets', function (Blueprint $table) {
            $table->string('bank')->nullable()->after('payment');
            $table->string('agen')->nullable()->after('bank');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('shiptickets', function (Blueprint $table) {
            //
        });
    }
}
