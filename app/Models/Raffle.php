<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Raffle extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image_path',
        'required_tickets',
        'sold_tickets',
        'winner_id',
        'winner_address',
        'winning_ticket_number',
        'is_drawn',
        'drawn_at',
        'prize_name',
        'type',
        'prize_description',
        'prize_value',
        'prize_claimed',
        'prize_tracking_number',
    ];

    public function winner()
    {
        return $this->belongsTo(User::class, 'winner_id');
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function latestWinners()
    {
        return $this->where('is_drawn', true)->latest()->paginate(5);
    }
    
}
