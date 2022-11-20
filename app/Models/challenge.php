<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
    protected $fillable = [
        'fee',
        'title',
        'markup',
        'styling',
        'language',
        'mode',
        'images',
        'description',
    ];
}