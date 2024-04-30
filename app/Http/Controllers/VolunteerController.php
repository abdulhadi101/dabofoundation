<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index(){

            return view('volunteer');

    }

    public function store(Request $request){

        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|max:255',
            'state' => 'required|max:255',
            'address' => 'required|max:255',
        ]);

        Volunteer::create($validatedData);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Volunteer information submitted successfully!');

    }
}
