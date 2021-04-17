<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('fonction');
            $table->string('tel')->unique();
            //$table->string('priorite');
            //$table->primary('id')->references('id')->on('contacts');

             
            //$table->primary('telephone')->references('telephone')->on('contact');
           // $table->bigInteger('typeusers_id')->unsigned();
            //$table->foreign('typeusers_id')->references('id')->on('typeusers');

            //$table->bigInteger('users_id')->unsigned();
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
        Schema::dropIfExists('contacts');
    }
}

