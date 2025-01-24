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
        Schema::table('teachers', function (Blueprint $table) {
        //    $table->id('id');
        //    $table->text('name');
        //    $table->text('username');
        //    $table->integer('phone');
        //    $table->integer('national_id');
        //    $table->integer('role');
        //    $table->text('password');
         //   $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
