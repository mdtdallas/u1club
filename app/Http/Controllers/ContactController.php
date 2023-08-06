<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
use App\Models\Subs;

class ContactController extends Controller
{
    public function contact(): View
    {
        $membersCount = User::where('is_admin', false)->count();
        $subscriberCount = Subs::all()->count();

        return view('contact.contact', compact('membersCount', 'subscriberCount'));
    }

    public function submitForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Send email to mdtdallas@hotmail.com
        $toEmail = 'mdtdallas@hotmail.com';
        $subject = $request->subject;
        $message = $request->message;
        $headers = "From: {$request->name} <{$request->email}>";

        //mail($toEmail, $subject, $message, $headers);

        // Redirect back with success message
        return back()->withDefault('contact.contact')->with('success', 'Your message has been sent successfully!');
    }
}
