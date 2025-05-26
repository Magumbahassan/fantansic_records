<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string',
            'email'         => 'required|email',
            'phone'         => 'required|string',
            'location'      => 'required|string',
            'session_type'  => 'required|string',
            'date'          => 'required|date',
            'time'          => 'required',
            'duration'      => 'required|string',
            'message'       => 'nullable|string',
            'file'          => 'nullable|file|mimes:mp3,wav,mp4,mov,avi|max:20480',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads', 'public');
            $validated['file_path'] = asset('storage/' . $path);
        }

        // Send email
        Mail::to('bookings@yourstudio.com')->send(new \App\Mail\StudioBookingMail($validated));

        return back()->with('success', 'Your appointment request has been sent successfully!');
    }
}

