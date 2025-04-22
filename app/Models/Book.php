<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'date',
        'isbn',
        'description',
        'quantity',
        'cover_image'
    ];

    protected $casts = [
        'quantity' => 'integer'
    ];
}
