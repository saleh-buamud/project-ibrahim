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

            Schema::table('subjects', function (Blueprint $table) {
              //  $table->unsignedInteger('acadmic_year_id')->nullable(); // تأكد من النوع الصحيح

                // إضافة المفتاح الخارجي
            //    $table->foreign('acadmic_year_id')->references('id')->on('acadmics_years')->onDelete('set null');
            });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subjects', function (Blueprint $table) {
            //
        });
    }
};
