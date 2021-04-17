<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('fonction');
            $table->string('departement');
            $table->string('service');
            $table->string('division');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            //$table->Integer('actif');

            //$table->bigInteger('users_id')->unisigned();
            //$table->foreign('users_id')->references('id')->on('users');

            $table->BigInteger('typeusers_code')->unsigned()->index();
            //$table->index('typeusers_code');
            $table->foreign('typeusers_code')->references('code')->on('typeusers')->constrained()->onDelete('restrict')->onUpdate('cascade');

               //$table->bigInteger('users_typeusers_id')->unisigned();
                //$table->foreign('users_typeusers_id')->references('id')->on('users');

            //$table->bigInteger('account_id')->unisigned();
            //$table->foreign('account_id')->references('id')->on('account');

            //$table->timestamp('email_verified_at')->nullable();
            //$table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
