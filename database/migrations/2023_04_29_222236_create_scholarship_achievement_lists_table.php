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
        Schema::create('scholarship_achievement_lists', function (Blueprint $table) {
            $table->id();
            $table->string('activity');
            $table->string('level');
            $table->string('position_held');
            $table->string('level_achievement');
            $table->string('from');
            $table->string('name_activity');
            $table->string('to');
            $table->string('certificate_achievement')->nullable();
            $table->string('first_name_contact');
            $table->string('email_contact');
            $table->string('last_name_contact');
            $table->string('telephone_contact');
            $table->string('position_contact');
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_achievement_lists');
    }
};