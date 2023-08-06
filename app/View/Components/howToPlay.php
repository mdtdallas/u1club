<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Raffle;

class howToPlay extends Component
{
    public $raffles;

    public function __construct()
    {
       $this->raffles = Raffle::all();
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.how-to-play');
    }
}