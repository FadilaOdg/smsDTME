<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts_groups', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('contacts_id')->unsigned()->index();
            $table->foreign('contacts_id')->references('id')->on('contacts')->onDelete('restrict')->onUpdate('cascade');

            $table->bigInteger('groups_id')->unsigned()->index();
            $table->foreign('groups_id')->references('id')->on('groups')->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('priority')->default(0);
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
        Schema::dropIfExists('contacts_groups');
    }
}
