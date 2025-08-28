<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // validate form
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        // send email
        Mail::send('emails.contact', $validated, function ($message) use ($validated) {
            $message->to('instrumentation@masararabia.com') // your webmail inbox
                    ->subject('New Contact Form Submission');
        });

        return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
    }
}
