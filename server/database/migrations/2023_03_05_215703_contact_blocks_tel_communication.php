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
        Schema::create('contact_block_telephone', function (Blueprint $table) {
            $table->id();
            $table->string('content');
            $table->unsignedBigInteger('contactBlock_id')->default(1);
            $table->foreign('contactBlock_id')->references('id')->on('contact_block')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_block_telephone');

    }
};
