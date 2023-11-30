<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
    ];

    public function detail()
    {
        return $this->belongsTo(Detail::class, 'transaction_id', 'id');
    }
}
