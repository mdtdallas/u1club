<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Http;

use App\Models\Raffle;
use App\Models\User;
use App\Models\Testimonial;

class WinnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $raffles = Raffle::where('is_drawn', true)->with('winner')->get();

        return view('winners.index', compact('raffles'));
    }

    public function fbpost()
    {
        $message = 'Test post from route with long lived token two new';
        $fbId = '109773855522604';
        $access_token = 'EAAdegZA2u6n8BAPcvIVFYE586QL6kEyDiT0HQq1XqKWs6on9CtiU25ZBjZCPkSfE4bHakRowSsEAoUKdg1IryMZBCcASWZCQ58vmKoR9khc34NUZB5aZBEpVJcwEThJqnBsDjxOvJ7FezHOCuZBu9LrKKLYgOxisEtI6nPqoOz2aUJT02WwxYZABGlu5xsvZBs6YcG0lsjpDQisQZDZD';
        $appId = '2074235626252927';
        $appSecret = '50290ac2a5c7b0f6b03b63086c8cfcc5';

        $token = Http::get("https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id={$appId}&client_secret={$appSecret}&fb_exchange_token={$access_token}");

        $accessToken = $token->json()['access_token'];

        //dd($accessToken);

        $response = Http::post("https://graph.facebook.com/{$fbId}/feed?message={$message}&access_token={$accessToken}");

        dd($response->json());
    }

    public function darkIndex(): View
    {
        //Get all raffles
        $raffles = Raffle::all();

        // Get raffles of type electronics
        $electronicsRafflesWinners = Raffle::where('type', 'electronics')->get() ?? [];
        $adventureRafflesWinners = Raffle::where('type', 'adventure')->get() ?? [];
        $leasureRafflesWinners = Raffle::where('type', 'leasure')->get();
        $luxuryRafflesWinners = Raffle::where('type', 'luxury')->get();
        $sportRafflesWinners = Raffle::where('type', 'sport')->get();

        $testimonials = Testimonial::all();

        $latestWinner = Raffle::where('is_drawn', true)->with('winner')->orderBy('drawn_at', 'desc')->first();

        return view('winners.index-dark', compact(['raffles','testimonials', 'electronicsRafflesWinners', 'adventureRafflesWinners', 'leasureRafflesWinners', 'luxuryRafflesWinners', 'sportRafflesWinners', 'latestWinner']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
