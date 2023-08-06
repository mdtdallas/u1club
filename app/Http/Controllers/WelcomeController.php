<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Raffle;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Testimonial;
use App\Models\Ticket;
use App\Models\Subs;

class WelcomeController extends Controller
{
    public function welcome(): View
    {
        $raffles = Raffle::all();

        // Get count of all users
        $userCount = User::count();
        $raffleCount = Raffle::count();
        $testimonials = Testimonial::all();

        // Get raffles of type electronics
        $electronicsRaffles = Raffle::where('type', 'electronics')->get() ?? [];
        $adventureRaffles = Raffle::where('type', 'adventure')->get() ?? [];
        $leasureRaffles = Raffle::where('type', 'leasure')->get();
        $luxuryRaffles = Raffle::where('type', 'luxury')->get();
        $sportRaffles = Raffle::where('type', 'sport')->get();

        return view('welcome', compact(['raffles', 'userCount', 'raffleCount', 'testimonials', 'electronicsRaffles', 'adventureRaffles', 'leasureRaffles', 'luxuryRaffles', 'sportRaffles']));
    }

    public function indexLight(): View
    {
        $raffles = Raffle::all();

        // Get count of all users
        $userCount = User::count();
        $raffleCount = Raffle::count();
        $testimonials = Testimonial::all();

        // Get raffles of type electronics
        $electronicsRaffles = Raffle::where('type', 'electronics')->get() ?? [];
        $adventureRaffles = Raffle::where('type', 'adventure')->get() ?? [];
        $leasureRaffles = Raffle::where('type', 'leasure')->get();
        $luxuryRaffles = Raffle::where('type', 'luxury')->get();
        $sportRaffles = Raffle::where('type', 'sport')->get();

        return view('home.index-light', compact(['raffles', 'userCount', 'raffleCount', 'testimonials', 'electronicsRaffles', 'adventureRaffles', 'leasureRaffles', 'luxuryRaffles', 'sportRaffles']));
    }

    public function indexFourDark(): View
    {
        $raffles = Raffle::all();
        $testimonials = Testimonial::all();
        $winners = Raffle::where('is_drawn', true)->orderBy('drawn_at', 'desc')->take(10)->get();

        // Get count of all users
        $userCount = User::count();
        $raffleCount = Raffle::count();
        $ticketCount = Ticket::count();
    
        return view('home.index-four-dark', compact(['raffles', 'userCount', 'raffleCount', 'testimonials', 'ticketCount', 'winners']));
    }

    public function terms(): View
    {
        return view('terms');
    }

    public function privacy(): View
    {
        return view('privacy');
    }

    public function faq(): View
    {
        return view('faq');
    }


    public function about(): View
    {
        $winnerCount = Raffle::where('is_drawn', true)->count();
        $ticketCount = Ticket::count();
        // Total value of all prizes from raffles table
        $totalPrizeValue = Raffle::where('is_drawn', true)->sum('prize_value');

        return view('about', compact('winnerCount', 'ticketCount', 'totalPrizeValue'));
    }

}
