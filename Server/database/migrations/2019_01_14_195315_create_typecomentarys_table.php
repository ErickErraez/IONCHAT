<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeComentarysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('typecomentarys', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->text('description');
          $table->unsignedInteger('idPublications');
          $table->foreign('idPublications')->references('id')->on('publications')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('typecomentarys');
    }
}
