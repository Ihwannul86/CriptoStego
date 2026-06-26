<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'original_name',
        'encrypted_file',
        'file_type',
        'file_size',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function encryptionKey()
    {
        return $this->hasOne(EncryptionKey::class);
    }

    public function stegoImage()
    {
        return $this->hasOne(StegoImage::class);
    }

    /*
    |--------------------------------------------------------------------------
    | Helper Methods
    |--------------------------------------------------------------------------
    */

    // cek apakah file sudah dienkripsi
    public function isEncrypted()
    {
        return $this->status === 'encrypted';
    }

    // cek apakah file sudah diembed ke gambar
    public function isEmbedded()
    {
        return $this->status === 'embedded';
    }

    // cek apakah file masih baru upload
    public function isUploaded()
    {
        return $this->status === 'uploaded';
    }

    // cek apakah file sudah didekripsi
    public function isDecrypted()
    {
        return $this->status === 'decrypted';
    }
}
