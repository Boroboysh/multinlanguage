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
        Schema::table('communication_methods', function (Blueprint $table) {
            $table->unsignedBigInteger('contactBlock_id')->default(1)->change();
            $table->foreign('contactBlock_id')->references('id')->on('contact_block')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('communication_methods', function (Blueprint $table) {
            $table->unsignedBigInteger('contactBlock_id')->change();
            $table->unsignedBigInteger('contactBlock_id')->default(1);
        });
    }
};
