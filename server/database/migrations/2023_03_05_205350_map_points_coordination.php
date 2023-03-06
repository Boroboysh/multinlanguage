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
        Schema::create('map_points_coordination', function (Blueprint $table) {
            $table->id();
            $table->float('x');
            $table->float('y');
            $table->unsignedBigInteger('mapPoint_id');
            $table->foreign('mapPoint_id')->references('id')->on('map_points')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('map_points_coordination');
    }
};
