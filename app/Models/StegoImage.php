<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StegoImage extends Model
{
    protected $fillable = [
        'document_id',
        'image_name',
        'stego_image_path',
        'stego_method'
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }
}
