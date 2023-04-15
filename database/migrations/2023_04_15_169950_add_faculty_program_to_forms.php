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
            // $table->foreignId('faculty_id')->nullable()->constrained('faculties')->onDelete('cascade')->after('color_photo');
            $table->foreignId('program_id')->nullable()->constrained('study_programs')->onDelete('cascade')->after('financial_verify');
            // $table->string('faculty')->after('color_photo');
            // $table->string('program')->after('faculty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            // $table->dropForeign(['faculty_id']);
            // $table->dropForeign(['program_id']);
            // $table->dropColumn('faculty_id');
            // $table->dropColumn('program_id');
            // $table->dropColumn('faculty');
            // $table->dropColumn('program');
        });
    }
};