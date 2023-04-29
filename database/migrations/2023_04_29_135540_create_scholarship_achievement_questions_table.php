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
        Schema::create('scholarship_achievement_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->integer('max_answer')->default(550)->nullable();
            $table->foreignId('scholarship_id')->constrained('scholarships')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_achievement_questions');
    }
};