<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'schedule_id',
        'user_id',
        'amount',
        'chair_one',
        'chair_two',
        'total',
        'status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function schedules()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
    public function details()
    {
        return $this->hasMany(Detail::class, 'transaction_id', 'id');
    }
    public function seatSelections()
    {
        return $this->hasMany(SeatSelection::class);
    }
}
