<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;

class NextDraw extends Component
{
    public $latestRaffle;
    public $percentRemaining;
    public $ticketsRemaining;

    public function __construct()
    {
        $this->latestRaffle = Raffle::select('id', 'title', 'required_tickets', 'sold_tickets')
        ->selectRaw('(required_tickets - sold_tickets) as tickets_remaining')
        ->selectRaw('((required_tickets - sold_tickets) / required_tickets * 100) as percent_remaining')
        ->where('is_drawn', 0)
        ->where('sold_tickets', '>=', 1)
        ->orderBy('percent_remaining', 'desc')
        ->first();

    if ($this->latestRaffle) {
        $this->ticketsRemaining = $this->latestRaffle->tickets_remaining;
        $this->percentRemaining = number_format($this->latestRaffle->percent_remaining, 0, '.', '');
    } else {
        $this->ticketsRemaining = 0;
        $this->percentRemaining = 0;
        $this->latestRaffle = [
            'title' => '',
            ];
    }
    
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.next-draw');
    }
}
