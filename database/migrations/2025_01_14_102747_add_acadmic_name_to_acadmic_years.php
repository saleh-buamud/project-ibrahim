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
        Schema::table('acadmics_years', function (Blueprint $table) {
         //   $table->string('acadmic_name');
           // $table->string('acadmic_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('acadmic_years', function (Blueprint $table) {
            //
        });
    }
};
