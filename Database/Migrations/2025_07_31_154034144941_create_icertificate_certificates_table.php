<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcertificateCertificatesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('icertificate__certificates', function (Blueprint $table) {
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->uuid('code')->nullable()->unique();
      $table->integer('customer_id')->unsigned();
      $table->foreign('customer_id')->references('id')->on('icertificate__customers')->onDelete('restrict');
      $table->integer('company_id')->unsigned()->nullable();
      $table->foreign('company_id')->references('id')->on('icertificate__companies')->onDelete('restrict');
      $table->integer('course_id')->unsigned();
      $table->foreign('course_id')->references('id')->on('icertificate__courses')->onDelete('restrict');
      $table->date('start_date');
      $table->date('end_date')->nullable();

      // Audit fields
      $table->timestamps();
      $table->auditStamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('icertificate__certificates');
  }
}
