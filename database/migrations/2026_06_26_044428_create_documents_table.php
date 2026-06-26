<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();

            // pemilik file
            $table->foreignId('user_id')
                  ->constrained()
                  ->onDelete('cascade');

            // nama asli file upload
            $table->string('original_name');

            // nama file setelah AES encrypt
            $table->string('encrypted_file');

            // tipe file (pdf/docx/txt)
            $table->string('file_type');

            // ukuran file byte
            $table->bigInteger('file_size');

            // status proses
            $table->enum('status', [
                'uploaded',
                'encrypted',
                'embedded',
                'decrypted'
            ])->default('uploaded');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
