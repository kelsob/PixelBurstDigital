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

    public function thankYou()
    {
        return view('pages.thank-you');
    }

    public function submit(Request $request)
    {
        // Honeypot spam protection - if this field is filled, it's likely a bot
        if ($request->filled('website')) {
            // Return a generic success response without actually processing or redirecting to thank you
            return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255|regex:/^[a-zA-Z\s\-\'\.]+$/', // Only letters, spaces, hyphens, apostrophes, dots
            'email' => 'required|email|max:255',
            'message' => 'required|string|min:10|max:2000', // Reasonable length limits
            'referral' => 'nullable|string',
            'services' => 'nullable|array',
            'services.*' => 'string',
            'website' => 'nullable|string|max:0' // Honeypot field should be empty
        ]);

        // Additional spam checks
        $message = $validatedData['message'];
        
        // Check for excessive links (common in spam)
        $linkCount = preg_match_all('/https?:\/\//', $message);
        if ($linkCount > 2) {
            return redirect()->route('contact')->with('error', 'Your message contains too many links. Please reduce the number of links and try again.');
        }

        // Check for excessive repetition (common spam pattern)
        $words = str_word_count(strtolower($message), 1);
        $wordCounts = array_count_values($words);
        $maxWordCount = max($wordCounts);
        if ($maxWordCount > 10 && count($words) > 20) {
            return redirect()->route('contact')->with('error', 'Your message appears to contain excessive repetition. Please revise and try again.');
        }

        // Check for common spam keywords
        $spamKeywords = ['bitcoin', 'cryptocurrency', 'forex', 'casino', 'loan', 'credit repair', 'weight loss', 'pharmacy'];
        $messageWords = strtolower($message);
        foreach ($spamKeywords as $keyword) {
            if (strpos($messageWords, $keyword) !== false) {
                // Return generic success without processing to avoid educating spammers
                return redirect()->route('contact')->with('success', 'Thank you for your message! We will get back to you soon.');
            }
        }

        try {
            Mail::to(['kelsob@gmail.com', 'chrisjdfast@gmail.com'])->send(new ContactFormSubmission($validatedData));
            return redirect()->route('thank-you');
        } catch (\Exception $e) {
            return redirect()->route('contact')->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
} 