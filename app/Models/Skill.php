<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['name', 'type', 'level', 'logo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
