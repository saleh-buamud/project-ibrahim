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
        Schema::table('accountants', function (Blueprint $table) {
            $table->date('birth_day')->nullable()->after('username'); // إضافة عمود الصورة بعد عمود الاسم
            $table->string('address')->after('national_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('accountants', function (Blueprint $table) {
            //
        });
    }
};
