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
        Schema::create('finance_deps', function (Blueprint $table) {
            $table->foreignId('student_id')->constrained('students');
            $table->unsignedInteger('acadmic_year_id');
            $table->foreign('acadmic_year_id')->references('id')->on('acadmics_years')->onDelete('cascade');
            $table->integer('total_price');
            $table->double('paid_vlaue');
            $table->double('remaining_fees');
            $table->timestamps();




        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_deps');
    }
};
