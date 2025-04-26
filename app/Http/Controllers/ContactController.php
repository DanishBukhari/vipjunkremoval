<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'topic' => 'required|string',
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'zip_code' => 'required|string|max:10',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        $yourEmail = 'Dani.syed.154@gmail.com';

        Mail::raw("
            New Contact Submission

            Topic: {$validated['topic']}
            Name: {$validated['name']}
            Email: {$validated['email']}
            Zip Code: {$validated['zip_code']}
            Phone: {$validated['phone']}
            Message: {$validated['message']}
        ", function ($message) use ($yourEmail) {
            $message->to($yourEmail)
                ->subject('New Contact Submission');
        });
        return back()->with('success', 'Message sent successfully!');
    }
}
