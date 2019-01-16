<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('photos', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('name',255);
          $table->string('type',255);
          $table->text('attached');
          $table->date('date');
          $table->text('description');
          $table->unsignedInteger('idPerson');
          $table->foreign('idPerson')->references('id')->on('persons')->onDelete('cascade');
          $table->unsignedInteger('idPhoto');
          $table->foreign('idPhoto')->references('id')->on('photo')->onDelete('cascade');

       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('photos');
    }
}
