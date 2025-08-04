<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcertificateTrainerTranslationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('icertificate__trainer_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('position')->nullable();

      $table->integer('trainer_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['trainer_id', 'locale']);
      $table->foreign('trainer_id')->references('id')->on('icertificate__trainers')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('icertificate__trainer_translations', function (Blueprint $table) {
      $table->dropForeign(['trainer_id']);
    });
    Schema::dropIfExists('icertificate__trainer_translations');
  }
}
