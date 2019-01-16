<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('persons', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('name',255);
          $table->string('surname',255);
          $table->string('gender',255);
          $table->string('birthdate',255);
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('persons');
    }
}