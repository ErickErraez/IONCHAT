<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('groups', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('nameGroup',20);
          $table->string('photo',255);
          $table->date('date');
          $table->unsignedInteger('idPerson');
          $table->foreign('idPerson')->references('id')->on('persons')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('groups');
    }
}