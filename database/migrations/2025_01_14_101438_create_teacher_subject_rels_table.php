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
        Schema::create('teacher_subject_rels', function (Blueprint $table) {
            $table->string('subject_code',255);
            $table->id('teacher_id');
            $table->timestamps();

            //forgein keys
            $table->foreign('subject_code')->references('code')->on('subjects');
            $table->foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_subject_rels');
    }
};
