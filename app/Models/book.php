<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable = [
        'book', 
        'author', 
        'price'
    ];
    protected $casts = [
        'book' => 'string',
        'author' => 'string',
        'price' => 'string'
    ];
}
