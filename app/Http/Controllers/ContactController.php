<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormSubmission;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function submit(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'referral' => 'nullable|string',
            'services' => 'nullable|array',
            'services.*' => 'string'
        ]);

        try {
            Mail::to(['kelsob@gmail.com', 'chrisjdfast@gmail.com'])->send(new ContactFormSubmission($validatedData));
            return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
} 