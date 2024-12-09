<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Club;
use App\Models\User;
use App\Models\Tournament;


class SuperAdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.super_admin.index');
    }

    public function tournaments()
    {
        return view('dashboards.super_admin.tournaments');
    }

    public function createTournament(Request $request)
    {
        $validated = $request->validate([
            'prize' => 'required|numeric|min:0',
            'participants' => 'required|integer|min:0',
            'fee' => 'required|numeric|min:0',
            'format' => 'required|string|max:255',
            'mode' => 'required|string|max:255',
            'starting_date' => 'required|date|after_or_equal:today', // Ensure the date is today or in the future
        ]);

        // Create a new tournament
        $tournament = new Tournament();
        $tournament->prize = $validated['prize'];
        $tournament->participants = $validated['participants'];
        $tournament->fee = $validated['fee'];
        $tournament->format = $validated['format'];
        $tournament->mode = $validated['mode'];
        $tournament->status = 0; // Default status is 'pending'
        $tournament->starting_date = $validated['starting_date'];
        $tournament->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Tournament created successfully!');
    }

    public function createOwner(Request $request)
    {
        $request->validate([
            'club_name' => 'required|string|max:255',
            'club_code' => 'required|string|max:50',
            'owner_name' => 'required|string|max:255',
            'owner_number' => 'required|string|max:20',
        ]);

        try {
            $clubName = strtolower(str_replace(' ', '', $request->input('club_name'))); // Remove spaces and convert to lowercase
            $email = $clubName . '_owner@lt.com'; // Format email address
            $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()'), 0, 12);

            $user = User::create([
                'name' => $request->input('owner_name'),
                'email' => $email,
                'password' => Hash::make($password),
                'role_id' => 1,
                'whatsapp_number' => $request->input('owner_number'),
            ]);

            $club = Club::create([
                'club_name' => $request->input('club_name'),
                'club_code' => $request->input('club_code'),
                'owner_number' => $request->input('owner_number'),
                'owner_id' => $user->id, // Associate the owner
            ]);

            $user->club_id = $club->id;
            $user->save();

            return redirect()->back()->with('success', 'User created successfully! Email: ' . $email . ' Password: ' . $password);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}
