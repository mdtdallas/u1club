<?php

namespace App\Models;

use Laravel\Cashier\Billable;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'full_name',
        'image',
        'email',
        'password',
        'phone_number',
        'number_of_tickets',
        'amount_spent',
        'bonus_total',
        'isAdmin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'is_admin' => 'boolean',
    ];

    public function enteredRaffles()
    {
        return $this->belongsToMany(Ticket::class, 'tickets', 'user_id', 'raffle_id');
    }

    public function wonRaffles()
    {
        return $this->belongsToMany(Raffle::class, 'raffles', 'winner_id', 'id');
    }

    public function getTicketsByRaffle()
    {
        $subquery = Ticket::select('raffle_id', 'ticket_number')
            ->where('user_id', $this->id)
            ->groupBy('raffle_id', 'ticket_number');

        $userTickets = Ticket::joinSub($subquery, 'filtered_tickets', function ($join) {
            $join->on('tickets.raffle_id', '=', 'filtered_tickets.raffle_id')
                ->on('tickets.ticket_number', '=', 'filtered_tickets.ticket_number');
        })
            ->with('raffle') // Eager load the raffle information
            ->select('tickets.raffle_id', 'raffles.*', 'filtered_tickets.ticket_number')
            ->groupBy('tickets.raffle_id', 'filtered_tickets.ticket_number')
            ->get();

        return $userTickets->map(function ($tickets) {
            $raffleInfo = $tickets->raffle;
            $ticketNumbers = $tickets->pluck('ticket_number')->toArray();
            return [
                'raffle_id' => $tickets->raffle_id,
                'raffle_info' => $raffleInfo,
                'ticket_numbers' => $ticketNumbers,
            ];
        })->values()->all();
    }


    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }

    public function raffles()
    {
        return $this->hasMany(Raffle::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
    
    public function isAdmin()
    {
        return $this->is_admin === 1;
    }
}
