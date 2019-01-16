<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {
       Schema::create('albums', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('name',50);
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
       Schema::dropIfExists('albums');
    }
}
