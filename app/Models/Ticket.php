<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'raffle_id',
        'user_id',
        'ticket_number'
    ];

    public function raffle()
    {
        return $this->belongsTo(Raffle::class, 'raffle_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function upcomingRaffles()
    {
        return $this->belongsToMany(Raffle::class, 'tickets', 'user_id', 'raffle_id');
    }

}
