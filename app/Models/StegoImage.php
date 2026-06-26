<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StegoImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_id',
        'image_name',
        'stego_image_path',
        'stego_method',
        'status'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    // helper method
    public function isEmbedded()
    {
        return $this->status === 'embedded';
    }

    public function isExtracted()
    {
        return $this->status === 'extracted';
    }
}
