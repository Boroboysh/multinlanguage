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
        Schema::create('text_info_block_contents', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('textInfoBlock_id');
            $table->foreign('textInfoBlock_id')->references('id')->on('text_info_blocks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('text_info_block_contents');
    }
};
