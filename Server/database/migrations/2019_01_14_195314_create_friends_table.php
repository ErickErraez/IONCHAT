<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *d
     * @return void
     */
    public function up()
    {
       Schema::create('friends', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->dateTime('date');
          $table->unsignedInteger('idPerson');
          $table->foreign('idPerson')->references('id')->on('persons')->onDelete('cascade');
          $table->unsignedInteger('idPersonFriend');
          $table->foreign('idPersonFriend')->references('id')->on('persons')->onDelete('cascade');
          $table->unsignedInteger('idState');
          $table->foreign('idState')->references('id')->on('states')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('friends');
    }
}
