<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Raffle;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            // Check if the authenticated user is an admin
        if (auth()->user()->is_admin == 1) {
            $raffles = Raffle::orderBy('prize_claimed', 'desc') // Sort prize_claimed == 1 first (descending order)
                ->orderBy('created_at', 'desc')    // Sort the remaining raffles by created_at (descending order)
                ->get();

    
            return view('admin.index', compact('raffles'));
        }
    
        // If not an admin, redirect to raffles.index
        return redirect()->route('raffles.index');
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
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string',
            'prize_value' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,jpeg,avif',
            'type' => 'required|string',
        ]);

        $validated['required_tickets'] = $validated['prize_value'] * 2.5;
        $validated['prize_name'] = $validated['title'];

        // Store the original image
        $imagePath = $request->file('image')->store('raffle_images', 'public_html');



        // Save the raffle with the resized image path
        $validated['image_path'] = $imagePath;
        Raffle::create($validated);

        return back()->withDefault('admin.index');
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
