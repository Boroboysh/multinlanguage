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
        Schema::create('list_info_block_element_list', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('listInfoBlockElement_id');
            $table->foreign('listInfoBlockElement_id')->references('id')->on('list_info_block_elements')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_info_block_element_list');
    }
};
