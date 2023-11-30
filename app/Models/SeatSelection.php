<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeatSelection extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_id', 'seat_id', 'schedule_id'];

    public function transaction()
    {
        // return $this->belongsTo('App\Transaction');
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }

    public function seat()
    {
        // return $this->belongsTo('App\Seat');
        return $this->belongsTo(Seat::class, 'seat_id', 'id');
    }

    public function schedule()
    {
        // return $this->belongsTo('App\Schedule');
        return $this->belongsTo(Schedule::class, 'schedule_id', 'id');
    }
}
