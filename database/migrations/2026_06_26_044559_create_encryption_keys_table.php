<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('encryption_keys', function (Blueprint $table) {
            $table->id();

            // relasi ke document
            $table->foreignId('document_id')
                  ->constrained()
                  ->onDelete('cascade');

            // AES key yang sudah di-encrypt RSA
            $table->longText('encrypted_aes_key');

            // RSA public key
            $table->longText('public_key');

            // RSA private key
            $table->longText('private_key');

            // initialization vector AES
            $table->string('iv');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('encryption_keys');
    }
};
