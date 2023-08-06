<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;
use App\Models\User;
use App\Models\Ticket;

class Overview extends Component
{
    public $raffleCount;
    public $userCount;
    public $ticketCount;

    public function __construct()
    {
        $this->raffleCount = Raffle::count();
        $this->userCount = User::count();
        $this->ticketCount = Ticket::count();

    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.overview');
    }
}