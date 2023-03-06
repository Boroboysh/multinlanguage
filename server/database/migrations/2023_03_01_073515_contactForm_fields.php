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
        Schema::create('contact_forms_fields', function (Blueprint $table) {
            $table->id();
            $table->text('city');
            $table->text('name');
            $table->text('tel_number');
            $table->text('message_placeholder');
            $table->unsignedBigInteger('contactForm_id');
            $table->foreign('contactForm_id')->references('id')->on('contact_forms')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms_fields');
    }
};
