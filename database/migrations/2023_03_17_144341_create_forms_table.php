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
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('high_school');
            $table->date('grad_date');
            $table->text('school_address');
            $table->string('school_city');
            $table->string('school_country');
            $table->string('school_postal_code');
            $table->string('high_school_certif')->nullable();
            $table->string('high_school_transcript')->nullable();
            $table->string('passport')->nullable();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};