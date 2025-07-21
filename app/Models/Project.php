<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'github_url',
        'demo_url',
        'images',
        'type',
        'reference',
        'tools',
        'keywords',
        'status',
    ];

    protected $casts = [
        'images' => 'array',
        'tools' => 'array',
        'keywords' => 'array',
    ];
}
