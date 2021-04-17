<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->date('dateenvoi');
            $table->Integer('envoireussi');

             $table->bigInteger('typemessages_id')->unsigned()->index();
            $table->foreign('typemessages_id')->references('id')->on('typemessages')->onDelete('restrict')->onUpdate('cascade');

             $table->bigInteger('modeles_id')->unsigned()->index();
            $table->foreign('modeles_id')->references('id')->on('modeles')->onDelete('no action')->onUpdate('cascade');

             $table->bigInteger('contacts_id')->unsigned()->index();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('restrict')->onUpdate('cascade');

             //$table->bigInteger('typeusers_id')->unsigned();
            //$table->foreign('typeusers_id')->references('id')->on('typeusers');

             $table->bigInteger('users_id')->unsigned()->index();
            $table->foreign('users_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('cascade');

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
        Schema::dropIfExists('messages');
    }
}
