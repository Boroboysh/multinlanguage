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
        Schema::create('subheader_fields', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('subheader_id');
            $table->foreign('subheader_id')->references('id')->on('subheaders')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subheader_fields');
    }
};
