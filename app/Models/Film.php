<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'film_name',
        'image',
        'genre',
        'duration',
        'age',
        'synopsis',
        'director',
    ];

    public function films()
    {
        return $this->hasMany(Schedule::class, 'film_id', 'id');
    }
}
