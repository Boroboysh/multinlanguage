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
        Schema::create('headers_languages', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('icon');
            $table->string('language_code');
            $table->unsignedBigInteger('header_id')->default(1);
            $table->foreign('header_id')->references('id')->on('headers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('headers_languages');

    }
};
