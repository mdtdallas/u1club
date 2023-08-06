<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Raffle;
use App\Models\Testimonial;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Stripe\Stripe;
use Stripe\PaymentIntent;

use Illuminate\Support\Facades\Http;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = auth()->user();
        $raffles = Raffle::select('raffles.id', 'raffles.title', 'raffles.required_tickets', 'raffles.sold_tickets', 'raffles.is_drawn', 'raffles.prize_claimed', 'raffles.prize_tracking_number', 'raffles.winner_id', DB::raw('COUNT(tickets.id) AS ticket_count'))
            ->leftJoin('tickets', 'raffles.id', '=', 'tickets.raffle_id')
            ->where('tickets.user_id', $user->id)
            ->groupBy('raffles.id')
            ->get();

        return view('myRaffles.index', compact('raffles'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $raffle = Raffle::findOrFail($request->raffle_id);

        $validated = $request->validate([
            'raffle_id' => 'required|integer',
            'number_of_tickets' => 'required|integer | max: ' . ($raffle->required_tickets - $raffle->sold_tickets),
        ]);

        // Get the authenticated user
        $user = auth()->user();

        // Check if the user has enough tickets
        if ($user->number_of_tickets < $validated['number_of_tickets']) {
            return redirect()->back()->withErrors([
                'number_of_tickets' => 'You do not have enough tickets.',
            ]);
        }

        // Find the maximum ticket number for the raffle
        $lastTicketNumber = Ticket::where('raffle_id', $raffle->id)
            ->max('ticket_number');

        // Set the next ticket number
        $nextTicketNumber = $lastTicketNumber ? $lastTicketNumber + 1 : 1;

        // Create tickets for each number_of_tickets requested
        for ($i = 0; $i < $validated['number_of_tickets']; $i++) {
            // Create a new ticket
            $ticket = Ticket::create([
                'raffle_id' => $raffle->id,
                'user_id' => $user->id,
                'ticket_number' => $nextTicketNumber + $i,
            ]);
        }

        // Subtract number_of_tickets from the user's remaining tickets
        $user->number_of_tickets -= $validated['number_of_tickets'];
        $user->save();

        // Update the raffle's sold_tickets count
        $raffle->sold_tickets += $validated['number_of_tickets'];
        $raffle->save();

        // Check if the raffle's required_tickets is reached
        if ($raffle->sold_tickets >= $raffle->required_tickets) {
            // Draw the winner
            $winnerTicketNumber = rand(1, $raffle->required_tickets);
            $winnerTicket = Ticket::where('raffle_id', $raffle->id)
                ->where('ticket_number', $winnerTicketNumber)
                ->first();

            // Update the raffle with the winner
            $raffle->is_drawn = true;
            $raffle->winner_id = $winnerTicket->user_id;
            $raffle->winning_ticket_number = $winnerTicket->ticket_number;
            $raffle->drawn_at = now();
            $raffle->save();
        }



        // Remove all ticets from drawn raffle except the winner
        if ($raffle->is_drawn) {
            // Ticket::where('raffle_id', $raffle->id)
            //     ->where('ticket_number', '!=', $raffle->winning_ticket_number)
            //     ->delete();
            // Add testimonial details to the testimonials table for winner to update later
            Testimonial::create([
                'raffle_id' => $raffle->id,
                'user_id' => $user->id,
                'testimonial' => '',
                'rating' => 0,
            ]);

            Raffle::create([
                'title' => $raffle->title,
                'description' => $raffle->description,
                'image_path' => $raffle->image_path,
                'required_tickets' => $raffle->required_tickets,
                'sold_tickets' => 0,
                'winner_id' => null,
                'winner_address' => null,
                'winning_ticket_number' => null,
                'prize_name' => $raffle->prize_name,
                'type' => $raffle->type,
                'prize_description' => $raffle->prize_description,
                'prize_value' => $raffle->prize_value,
                'prize_claimed' => 0,
                'prize_tracking_number' => null,
            ]);

            // // Prepare the message to post on Facebook
            // $message = "Congratulations to the winner of our raffle!\n"
            //     . "Winner: {$winnerTicket->user->name}\n"
            //     . "Raffle ID: {$raffle->id}\n"
            //     . "Prize: {$raffle->prize_name}\n"
            //     . "Please head to the website to claim your prize!!\n";


            // $fbId = '109773855522604';
            // $access_token = 'EAAdegZA2u6n8BO5sSg7Gs6FhDq1EizkzIjwuZAfipu7j74r5zYC55ASBTcH9AJiSMZBaHvcHpNY9ZCeE6cnkuCZCIxvxPG0Y5z7gkoDLoiTyAkRzcxZByJjj6WBLG5cSHEM91ZB9YaN3zol0zVKanilY4pi8NGdDkTbaaQK5GUjC6Ees5C76jvVBDTvqEtNU3g7p7TzYGWnmlcqtYNTd5ZBglgVOgwZDZD';
            // $appId = '2074235626252927';
            // $appSecret = '50290ac2a5c7b0f6b03b63086c8cfcc5';

            // $token = Http::get("https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id={$appId}&client_secret={$appSecret}&fb_exchange_token={$access_token}");

            // $accessToken = $token->json()['access_token'];

            // Http::post("https://graph.facebook.com/{$fbId}/feed?message={$message}&access_token={$accessToken}");
        }




        return back()->withDefault('raffles.index');
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
