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
           // $table->id('student_id');
           // $table->string('subject_code');

            //forgein keys
           // $table->foreign('student_id')->references('id')->on('students')->onDelete('cascade');
          //  $table->foreign('subject_code')->references('code')->on('subjects')->onDelete('cascade');
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
