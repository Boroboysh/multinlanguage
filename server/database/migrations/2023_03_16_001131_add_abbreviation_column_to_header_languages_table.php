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
        Schema::table('headers_languages', function (Blueprint $table) {
            $table->string('abbreviation', 190);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('headers_languages', function (Blueprint $table) {
            $table->dropColumn('abbreviation');
        });
    }
};
