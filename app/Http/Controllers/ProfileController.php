<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Ticket;

class ProfileController extends Controller
{

    public function userTransactions(): View
    {
        $user = auth()->user();
        $transactions = $user->transactions ?? [];

        return view('profile.user-transactions', compact('transactions'));
    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.show', [
            'user' => $request->user(),
        ]);
    }

    public function userInfo(): View
    {
        $user = auth()->user();

        return view('profile.user-info', compact('user'));
    }

    public function show()
    {
        // Get the authenticated user
        $user = auth()->user();
        $userId = $user->id;
        $now = Carbon::now();

        // Get future raffles and all tickets for the user, grouped by raffle
        $upcomingRaffles = Ticket::where('user_id', $userId)
            ->whereHas('raffle', function ($query) use ($now) {
                $query->where('is_drawn', false)
                    ->groupBy('raffle_id')
                    ->orderBy('drawn_at', 'asc');
            })
            ->get()
            ->groupBy('raffle_id')
            ->map(function ($tickets, $raffleId) {
                $raffleInfo = $tickets->first()->raffle;
                $ticketNumbers = $tickets->pluck('ticket_number')->toArray();
                return [
                    'raffle_id' => $raffleId,
                    'raffle_info' => $raffleInfo,
                    'ticket_numbers' => $ticketNumbers,
                ];
            })
            ->values()
            ->all();


        // Get all past raffles for the user
        $pastRaffles = Ticket::where('user_id', $userId)
            ->whereHas('raffle', function ($query) use ($now) {
                $query->where('drawn_at', '<=', $now)
                    ->where('is_drawn', true)
                    ->groupBy('raffle_id')
                    ->orderBy('drawn_at', 'desc');
            })
            ->get()
            ->groupBy('raffle_id')
            ->map(function ($tickets, $raffleId) {
                $raffleInfo = $tickets->first()->raffle;
                $ticketNumbers = $tickets->pluck('ticket_number')->toArray();
                return [
                    'raffle_id' => $raffleId,
                    'raffle_info' => $raffleInfo,
                    'ticket_numbers' => $ticketNumbers,
                ];
            })
            ->values()
            ->all();

        // Get a count of all tickets for the user
        $ticketCount = Ticket::where('user_id', $userId)->count();

        return view('profile.show', compact('upcomingRaffles', 'ticketCount', 'pastRaffles'));
    }

    public function userUpdateForm()
    {
        $user = auth()->user();

        return view('profile.edit', compact('user'));
    }


    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    public function uploadImage(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        $imagePath = $request->file('image')->store('profile_images', 'public');
        $user->image_path = $imagePath;
        $user->save();

        return back()->withDefault('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
