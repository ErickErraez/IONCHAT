<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('publications', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('content',255);
          $table->dateTime('date');
          $table->unsignedInteger('idPerson');
          $table->foreign('idPerson')->references('id')->on('persons')->onDelete('cascade');
          $table->unsignedInteger('idTypePublication');
          $table->foreign('idTypePublication')->references('id')->on('typecomentarys')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('publications');
    }
}
