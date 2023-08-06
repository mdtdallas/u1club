<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;

class topTenWinners extends Component
{
    public $winners;

    public function __construct()
    {
        // Get all raffles that have been drawn
        $this->winners = Raffle::where('is_drawn', true)->orderBy('drawn_at', 'desc')->take(10)->get();
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.top-ten-winners');
    }
}
