<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('comentarys', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('text',255);
          $table->dateTime('date');
          $table->unsignedInteger('idPerson');
          $table->foreign('idPerson')->references('id')->on('persons')->onDelete('cascade');
          $table->unsignedInteger('idPublication');
          $table->foreign('idPublication')->references('id')->on('publications')->onDelete('cascade');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('comentarys');
    }
}
