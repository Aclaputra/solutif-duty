<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Enrollments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Enrollments', function (Blueprint $table) {
            $table->unsignedBigInteger('StudentID');
            $table->foreign('StudentID')->references('StudentID')->on('Students');

            $table->unsignedBigInteger('CourseID');
            $table->foreign('CourseID')->references('CourseID')->on('Courses');

            $table->string('updated_at');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Enrollments');
    }
}
