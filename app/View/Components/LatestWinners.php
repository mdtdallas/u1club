<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;

class LatestWinners extends Component
{
    public $electronicsRafflesWinners;
    public $luxuryRafflesWinners;
    public $adventureRafflesWinners;
    public $leasureRafflesWinners;
    public $sportRafflesWinners;

    public function __construct()
    {
        $this->electronicsRafflesWinners = Raffle::where('type', 'electronics')->get();
        $this->adventureRafflesWinners = Raffle::where('type', 'adventure')->get();
        $this->leasureRafflesWinners = Raffle::where('type', 'leasure')->get();
        $this->luxuryRafflesWinners = Raffle::where('type', 'luxury')->get();
        $this->sportRafflesWinners = Raffle::where('type', 'sport')->get();
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.latest-winners');
    }
}