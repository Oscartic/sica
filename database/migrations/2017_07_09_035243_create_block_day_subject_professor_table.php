<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockDaySubjectProfessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_day_subject_professor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('professor_id')->unsigned();
            $table->integer('subject_id')->unsigned()->nullable();
            $table->integer('block_id')->unsigned();
            $table->integer('day_id')->unsigned();
            $table->string('seccion', 4)->nullable();
            $table->string('sala', 4)->nullable();
            $table->foreign('professor_id')->references('id')->on('professors');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('block_id')->references('id')->on('blocks');
            $table->foreign('day_id')->references('id')->on('days');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_day_subject_professor');
    }
}
