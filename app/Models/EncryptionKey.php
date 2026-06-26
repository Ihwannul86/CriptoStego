<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EncryptionKey extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'encrypted_aes_key',
        'public_key',
        'private_key',
        'iv'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function hasEncryptedKey()
    {
        return !empty($this->encrypted_aes_key);
    }
}
