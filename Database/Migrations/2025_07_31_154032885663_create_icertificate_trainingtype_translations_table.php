<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcertificateTrainingTypeTranslationsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('icertificate__training_type_translations', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->string('name')->unique();
      $table->text('description')->nullable();

      $table->integer('training_type_id')->unsigned();
      $table->string('locale')->index();
      $table->unique(['training_type_id', 'locale'], 'training_type_locale_unique');
      $table->foreign('training_type_id', 'fk_training_type')
        ->references('id')
        ->on('icertificate__training_types')
        ->onDelete('cascade');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('icertificate__training_type_translations', function (Blueprint $table) {
      $table->dropForeign('fk_training_type');
    });

    Schema::dropIfExists('icertificate__training_type_translations');
  }
}
