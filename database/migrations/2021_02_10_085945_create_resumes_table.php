<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('experience')->nullable();
            $table->string('firm',150)->nullable();
            $table->string('position')->nullable();
            $table->string('college')->nullable();
            $table->string('departmant')->nullable();
            $table->text('career')->nullable();
            $table->string('language')->nullable();
            $table->text('skill')->nullable();
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
        Schema::dropIfExists('resumes');
    }
}
