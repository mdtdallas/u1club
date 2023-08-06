<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;

class HomeAllRafflesTwo extends Component
{
    public $raffles;

    public function __construct()
    {
        $this->raffles = Raffle::where('is_drawn', false)->orderBy('drawn_at', 'desc')->get();
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.home-all-raffles-two');
    }
}
