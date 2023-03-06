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
        Schema::create('communication_methods', function (Blueprint $table) {
            $table->id();
            $table->text('icon');
            $table->text('name');
            $table->text('link');
            $table->unsignedBigInteger('contactBlock_id')->default(1);
            $table->foreign('contactBlock_id')->references('id')->on('contact_block')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communication_methods');
    }
};
