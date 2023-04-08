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
        Schema::table('forms', function (Blueprint $table) {
            // $table->foreignId('faculty_id')->nullable()->constrained('faculties')->onDelete('cascade');
            // $table->foreignId('program_id')->nullable()->constrained('programs')->onDelete('cascade');
            $table->string('faculty')->after('color_photo');
            $table->string('program')->after('faculty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            //
        });
    }
};