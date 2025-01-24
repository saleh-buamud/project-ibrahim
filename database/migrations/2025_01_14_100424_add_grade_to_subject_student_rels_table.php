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
        Schema::table('subject_student_rels', function (Blueprint $table) {
            $table->integer('shares');
            $table->integer('exams');
            $table->integer('Commitment');
            $table->integer('all');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subject_student_rels', function (Blueprint $table) {
            //
        });
    }
};
