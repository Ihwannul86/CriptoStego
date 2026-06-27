<?php

namespace App\Services;

class EncryptionService
{
    /*
    |--------------------------------------------------------------------------
    | Generate AES 256-bit key
    |--------------------------------------------------------------------------
    | 32 bytes = 256 bit
    */

    public function generateKey()
    {
        return random_bytes(32);
    }


    /*
    |--------------------------------------------------------------------------
    | Generate Initialization Vector
    |--------------------------------------------------------------------------
    | AES-256-CBC membutuhkan IV 16 byte
    */

    public function generateIV()
    {
        return random_bytes(16);
    }


    /*
    |--------------------------------------------------------------------------
    | Encrypt file content
    |--------------------------------------------------------------------------
    */

    public function encryptFile($fileContent, $key, $iv)
    {
        $encrypted = openssl_encrypt(
            $fileContent,
            'AES-256-CBC',
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        if ($encrypted === false) {
            throw new \Exception("Encryption failed");
        }

        return $encrypted;
    }


    /*
    |--------------------------------------------------------------------------
    | Decrypt file content
    |--------------------------------------------------------------------------
    */

    public function decryptFile($encryptedData, $key, $iv)
    {
        $decrypted = openssl_decrypt(
            $encryptedData,
            'AES-256-CBC',
            $key,
            OPENSSL_RAW_DATA,
            $iv
        );

        if ($decrypted === false) {
            throw new \Exception("Decryption failed");
        }

        return $decrypted;
    }


    /*
    |--------------------------------------------------------------------------
    | Encode key to base64
    |--------------------------------------------------------------------------
    | Untuk simpan ke database
    */

    public function encodeKey($key)
    {
        return base64_encode($key);
    }


    /*
    |--------------------------------------------------------------------------
    | Decode key from base64
    |--------------------------------------------------------------------------
    */

    public function decodeKey($key)
    {
        return base64_decode($key);
    }


    /*
    |--------------------------------------------------------------------------
    | Encode IV to base64
    |--------------------------------------------------------------------------
    */

    public function encodeIV($iv)
    {
        return base64_encode($iv);
    }


    /*
    |--------------------------------------------------------------------------
    | Decode IV from base64
    |--------------------------------------------------------------------------
    */

    public function decodeIV($iv)
    {
        return base64_decode($iv);
    }
}
