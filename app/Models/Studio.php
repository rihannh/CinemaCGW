<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    use HasFactory;

    protected $fillable = [
        'studio_name',
        'type',
        'amount',
        'price',
    ];

    public function studios()
    {
        return $this->hasMany(Schedule::class, 'cinema_id', 'id');
    }
    public function seats()
    {
        return $this->hasMany(Seat::class, 'studio_id', 'id');
    }
}
