<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBravoOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bravo_orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            $table->string('order_number');
            $table->string('bravo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bravo_orders');
    }
}
