<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    use HasFactory;

    protected $fillable = ['studio_id', 'row', 'number'];

    public function studio()
    {
        return $this->belongsTo(Studio::class, 'studio_id', 'id');
    }

    public function seatSelections()
    {
        return $this->hasMany(SeatSelection::class, 'seat_id', 'id');
    }
}
