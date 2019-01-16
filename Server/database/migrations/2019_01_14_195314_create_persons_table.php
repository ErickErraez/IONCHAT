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
          $table->string('name',50);
          $table->string('surname',50);
          $table->boolean('gender',255);
          $table->date('birthdate');
        
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