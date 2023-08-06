<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Raffle;

class RaffleTypes extends Component
{

    public $electronicsRaffles;
    public $adventureRaffles;
    public $leasureRaffles;
    public $luxuryRaffles;
    public $sportRaffles;
    public $raffles;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->raffles = Raffle::all() ?? [];
        
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.raffle-types');
    }
}
