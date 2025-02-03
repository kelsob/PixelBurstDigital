<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'project_type' => 'required|string',
            'budget' => 'required|string',
            'message' => 'required|string',
        ]);

        // Here you would typically:
        // 1. Send an email notification
        // 2. Store the inquiry in the database
        // 3. Send an auto-response to the client

        return back()->with('success', 'Thank you for your message. We\'ll be in touch soon!');
    }
} 