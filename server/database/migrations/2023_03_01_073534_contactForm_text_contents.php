<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_forms_text_contents', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->text('key');
            $table->unsignedBigInteger('contactForm_id')->default(1);
            $table->foreign('contactForm_id')->references('id')->on('contact_forms')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms_text_contents');
    }
};
