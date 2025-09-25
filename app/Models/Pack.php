<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'advantages',
        'image',
        'active',
        'is_trending',
        'is_quotation',
    ];

    protected $casts = [
        'active' => 'boolean',
        'is_trending' => 'boolean',
        'is_quotation' => 'boolean',
    ];
}
