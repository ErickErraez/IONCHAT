<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('interests', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('type',20);
          $table->string('description',155);
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
       Schema::dropIfExists('interests');
    }
}