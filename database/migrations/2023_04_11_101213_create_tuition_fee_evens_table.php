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
        Schema::create('tuition_fee_evens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('study_program_id')->constrained('study_programs')->onDelete('cascade');
            // $table->foreign('study_program_code')->references('code')->on('study_programs')->onDelete('cascade');
            $table->integer('fixed_course_fee')->nullable();
            $table->integer('variable_course_fee')->nullable();
            $table->integer('practical_studio_fee')->nullable();
            $table->integer('tuition_fee')->nullable();
            $table->integer('total_fee')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuition_fee_evens');
    }
};