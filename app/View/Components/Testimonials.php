<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Testimonial;

class Testimonials extends Component
{
    public $testimonials;

    public function __construct()
    {
       $this->testimonials = Testimonial::where('completed', 1)->get()->shuffle();  
    }

    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.testimonials');
    }
}
