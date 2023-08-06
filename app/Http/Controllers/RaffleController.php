<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Raffle;

class RaffleController extends Controller
{
    /**
     * Light Mode.
     */
    public function index(): View
    {
        $raffles = Raffle::all() ?? [];

        // Get raffles of type
        $electronicsRaffles = Raffle::where('type', 'electronics')->get();
        $adventureRaffles = Raffle::where('type', 'adventure')->get();
        $leasureRaffles = Raffle::where('type', 'leasure')->get();
        $luxuryRaffles = Raffle::where('type', 'luxury')->get();
        $sportRaffles = Raffle::where('type', 'sport')->get();


        return view('raffles.light-index-two', compact(['raffles', 'electronicsRaffles', 'adventureRaffles', 'leasureRaffles', 'luxuryRaffles', 'sportRaffles']));
    }

    /**
     * Dark Mode.
     */
    public function darkIndex(): View
    {
        $raffles = Raffle::all() ?? [];

        
        return view('raffles.dark-index-two', compact('raffles'));
    }

    public function userRaffles(): View
    {
        $user = auth()->user();
        $enteredRaffles = $user->enteredRaffles ?? [];

        return view('draws.index', compact('enteredRaffles'));
    }

    public function enterRaffleModal(Raffle $raffle): View
    {
        $user = auth()->user();

        return view('raffles.enterRaffleModal', compact(['raffle', 'user']));
    }

    public function claimModal(Raffle $raffle): View
    {
        // Check if the authenticated user is the winner
        if ($raffle->winner_id !== Auth::id()) {
            $message = 'You are not the winner of this raffle.';
            // If the user is not the winner, you can redirect them with an error message
            return view('components.deny-modal', compact('message'));
        }

        $user = auth()->user();
        return view('raffles.claimModal', compact(['raffle', 'user']));
    }

    public function claimRafflePrize(Request $request, Raffle $raffle): RedirectResponse
    {
        // Find the raffle
        $raffle = Raffle::findOrFail($raffle->id);

        // Check if the authenticated user is the winner
        if ($raffle->winner_id !== auth()->user()->id) {
            return back()->withErrors(['winner' => 'You are not the winner of this raffle.']);
        }

        // Validate the request data
        $validated = $request->validate([
            'full_name' => 'required|string',
            'phone_number' => 'required|string',
            'winner_address' => 'required|string',
        ]);

        // Update user full name, phone number
        auth()->user()->update([
            'full_name' => $validated['full_name'],
            'phone_number' => $validated['phone_number'],
        ]);

        // Update raffle winner address and set prize_claimed to true
        $raffle->update([
            'winner_address' => $validated['winner_address'],
            'prize_claimed' => true,
        ]);

        return redirect()->route('raffles.index')->with('success', 'Prize claimed successfully!');
    }


    public function editRaffle(Raffle $raffle): View
    {
        return view('raffles.editRaffleModal', compact('raffle'));
    }

    public function updateTracking(Request $request, string $id): RedirectResponse
    {

        $validated = $request->validate([
            'prize_tracking_number' => 'required|string',
        ]);

        // Find the raffle
        $raffle = Raffle::findOrFail($id);

        //Update raffle tracking number
        $raffle->update([
            'prize_tracking_number' => $validated['prize_tracking_number'],
        ]);

        // Redirect back to the raffles index page or a success page
        return back()->withDefault('raffles.index')->with('success', 'Tracking number updated successfully!');
    }

    public function checkNumbers(Request $request): View
    {
        $validated = $request->validate([
            'raffle_id' => 'required|integer',
        ]);

        $raffle = Raffle::findOrFail($validated['raffle_id']);

        $user = auth()->user();

        if ($raffle->winner_id === $user->id) {
            // User is the winner
            $message = 'Congratulations! You are the winner!!.';
        } else {
            // User is not the winner
            $message = 'Sorry, you have not won the raffle. Try again.';
        }

        return view('raffles.checkTicketModal', compact(['message']));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $raffle = Raffle::findOrFail($id);

        // Calculate the tickets remaining
        $ticketsRemaining = max(0, $raffle->required_tickets - $raffle->sold_tickets);
        $percentRemaining = number_format(($ticketsRemaining / $raffle->required_tickets) * 100, 0, '.', '');

        return view('raffles.show', compact('raffle', 'ticketsRemaining', 'percentRemaining'));
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
