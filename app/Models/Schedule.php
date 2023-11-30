<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'film_id',
        'cinema_id',
        'amount',
        'price',
        'time',
        'date',
    ];

    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'cinema_id', 'id');
    }
}
