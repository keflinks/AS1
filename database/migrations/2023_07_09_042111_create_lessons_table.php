<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('season_id')->index();
            $table->foreign('season_id')->references('id')->on('seasons')->cascadeOnDelete();
            $table->unsignedBigInteger('course_id')->index();
            $table->foreign('course_id')->references('id')->on('courses')->cascadeOnDelete();
            $table->unsignedBigInteger('classroom_id')->index();
            $table->foreign('classroom_id')->references('id')->on('classrooms')->cascadeOnDelete();
            $table->unsignedBigInteger('teacher_id')->index();
            $table->foreign('teacher_id')->references('id')->on('teachers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
