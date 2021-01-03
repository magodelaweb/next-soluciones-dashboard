<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreaTablaParametros extends Migration
{
    public function up()
    {
      Schema::create('params', function (Blueprint $table) {
          $table->id();
          $table->string('clave')->unique();
          $table->string('valor');
          $table->timestamps();
      });
    }
    public function down()
    {
        Schema::dropIfExists('params');
    }
}
