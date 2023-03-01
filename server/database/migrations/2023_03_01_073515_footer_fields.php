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
        Schema::create('footer_fields', function (Blueprint $table) {
            $table->id();
            $table->text('city');
            $table->text('name');
            $table->text('tel_number');
            $table->text('message_placeholder');
            $table->unsignedBigInteger('footer_id');
            $table->foreign('footer_id')->references('id')->on('footers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footer_fields');
    }
};
