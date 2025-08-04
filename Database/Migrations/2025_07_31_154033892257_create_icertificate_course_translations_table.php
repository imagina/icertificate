<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcertificateCourseTranslationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('icertificate__course_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('title');
      $table->text('description')->nullable();

      $table->integer('course_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['course_id', 'locale']);
      $table->foreign('course_id')->references('id')->on('icertificate__courses')->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('icertificate__course_translations', function (Blueprint $table) {
      $table->dropForeign(['course_id']);
    });
    Schema::dropIfExists('icertificate__course_translations');
  }
}
