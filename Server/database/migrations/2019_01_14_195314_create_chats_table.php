<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('chats', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('type',255);
          $table->text('content');
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
       Schema::dropIfExists('chats');
    }
}
