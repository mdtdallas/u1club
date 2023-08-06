<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class userActionCard extends Component
{
    public $user;
    public $ticketCount;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->user = auth()->user();
        $this->ticketCount = $this->user->tickets()->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-action-card');
    }
}
