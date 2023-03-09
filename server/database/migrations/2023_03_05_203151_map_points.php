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
        Schema::create('map_points', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('type');
            $table->unsignedBigInteger('mapInfoBlock_id');
            $table->foreign('mapInfoBlock_id')->references('id')->on('map_info_blocks')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('map_points');
    }
};
