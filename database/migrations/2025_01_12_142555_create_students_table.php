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
        Schema::create('students', function (Blueprint $table)
        {
            $table->id('id');
            $table->text('username');
            $table->text('name');
            $table->integer('role');
            $table->date('birth_day');
            $table->integer('national_id');
            $table->text('address');
            $table->integer('academic_year');
            $table->integer('phone');
            $table->double('remaining_fees');
            $table->integer('days_of_absence');
            $table->text('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
