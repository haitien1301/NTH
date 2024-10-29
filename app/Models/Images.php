<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = [
        'book_id',
        'url',
    ];
    // Each image belongs to one book
    public function books()
    {
        return $this->belongsTo(Books::class);
    }
}

