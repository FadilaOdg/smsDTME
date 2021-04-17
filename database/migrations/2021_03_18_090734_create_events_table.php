<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('libelle');

             $table->bigInteger('typeusers_id')->unsigned();
            //$table->foreign('typeusers_id')->references('id')->on('typeusers');

             $table->bigInteger('typeevents_id')->unsigned();
            //$table->foreign('typeevents_id')->references('id')->on('typeevents');

            $table->bigInteger('users_id')->unsigned();
            //$table->foreign('users_id')->references('id')->on('users');

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
        Schema::dropIfExists('events');
    }
}
