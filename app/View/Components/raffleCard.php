<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;


class raffleCard extends Component
{
    
    public $raffle;

    /**
     * Create a new component instance.
     */
    public function __construct(Raffle $raffle)
    {
        $this->raffle = Raffle::find($raffle->id);
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.raffle-card');
    }
}