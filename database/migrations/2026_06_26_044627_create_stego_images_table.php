<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stego_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('document_id')
                  ->constrained()
                  ->onDelete('cascade');

            $table->string('image_name');

            $table->string('stego_image_path');

            $table->string('stego_method')
                  ->default('LSB');

            // status proses steganografi
            $table->enum('status', [
                'pending',
                'embedded',
                'extracted'
            ])->default('pending');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stego_images');
    }
};
