<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandeTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('demande', function (Blueprint $table) {
          $table->increments('id');
          $table->boolean('date_demande');
          $table->string('rang', 50);
      });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::drop('demande');
  }
}
