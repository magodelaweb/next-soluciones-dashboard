<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActualizaUsers extends Migration
{
  public function up()
  {
    Schema::table('users', function (Blueprint $table) {
        $table->string('foto')->after('active')->default("default.jpg");
    });
  }
  public function down()
  {
    Schema::table('users', function (Blueprint $table) {
        $table->dropColumn('foto');
    });
  }
}
