<?php

namespace App\Http\Controllers;

use App\Mail\PrayerRequestSubmitted;
use App\Models\PrayerRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PrayerRequestController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:15',
            'location' => 'required|string|max:255',
            'whom' => 'required|string|max:255',
            'prayer' => 'required|string',
        ]);

        $prayerRequest = PrayerRequest::create($validatedData);

        Mail::to('heavenvim@yahoo.com')->send(new PrayerRequestSubmitted($prayerRequest));

        return redirect()->back()->with('success', 'Your prayer request has been submitted successfully!');
    }
}
