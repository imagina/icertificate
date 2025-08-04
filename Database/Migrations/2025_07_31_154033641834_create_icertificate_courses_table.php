<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIcertificateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('icertificate__courses', function (Blueprint $table) {
        $table->engine = 'InnoDB';
        $table->increments('id');
        $table->integer('standard_duration')->nullable();
        $table->integer('training_type_id')->unsigned();
        $table->foreign('training_type_id')->references('id')->on('icertificate__training_types')->onDelete('restrict');
        $table->integer('trainer_id')->unsigned();
        $table->foreign('trainer_id')->references('id')->on('icertificate__trainers')->onDelete('restrict');
        $table->integer('status')->default(1);

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
        Schema::dropIfExists('icertificate__courses');
    }
}
