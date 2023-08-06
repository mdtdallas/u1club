<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

use Stripe\Stripe;
use Laravel\Cashier\Facades\Cashier;

use Stripe\StripeClient;
use Stripe\PaymentIntent;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = auth()->user();

        return view('myRaffles.index', compact('raffles'));
    }

    public function showPurchaseTicketsForm(): View
    {
        // Define your Stripe API secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        return view('myRaffles.payment');
    }


    public function addTickets(Request $request): RedirectResponse
    {
        // Validate the request
        $validated = $request->validate([
            'number_of_tickets' => 'required|integer|min:1',
            'payment_method' => 'required',
        ]);

        // Set your Stripe API secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        // Create a payment intent with the final amount
        $paymentIntent = PaymentIntent::create([
            'amount' => 100 * $validated['number_of_tickets'], // $1.00 per ticket
            'currency' => 'aud',
            'payment_method' => $validated['payment_method'],
            'confirm' => true, // This will immediately confirm the payment
            'metadata' => [
                'user_id' => Auth::id(),
                'number_of_tickets' => $validated['number_of_tickets'],
            ],
        ]);

        // Check if the payment was successful
        if ($paymentIntent->status === 'succeeded') {
            // Update the user's number of tickets
            $user = Auth::user();
            $user->increment('number_of_tickets', $validated['number_of_tickets']);
            $user->amount_spent += $validated['number_of_tickets'];
            $user->save();

            $paymentIntentId = $paymentIntent->id;
            // Create a new transaction
            $user->transactions()->create([
                'payment_intent_id' => $paymentIntentId,
                'amount' => $paymentIntent->amount / 100,
                'number_of_tickets' => $validated['number_of_tickets'],
            ]);

            // Redirect to the user's raffles or any other appropriate page
            return redirect()->route('raffles.index')->with('success', 'Tickets purchased successfully.');
        } else {
            // Redirect back to the checkout page with an error message
            return redirect()->back()->withErrors([
                'number_of_tickets' => 'Payment failed. Please try again.',
            ]);
        }
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
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
