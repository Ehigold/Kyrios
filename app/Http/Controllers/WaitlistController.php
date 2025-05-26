<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WaitlistEmail;

class WaitlistController extends Controller
{

    //

    public function joinWaitlist(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:waitlist_emails',
        ]);

        WaitlistEmail::create($validatedData);

        return redirect()->back()->with('success', 'You have been added to the waitlist!');
    }

}
