<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'style',
        'image',
        'prix',
        'surface',
        'piece',
        'meuble',
        'desc',
        'motClef',
    ];
    protected $dates = ['created_at'];
    use HasFactory;
}
