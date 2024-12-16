<?php

namespace App\Http\Controllers\Dashboard;
use App\Models\Club;
use App\Models\User;
use App\Models\Tournament;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SuperOwnerDashboardController extends Controller
{
    public function index()
    {
        $club_count = Club::count();
        $club_count = $club_count + 31;
        $users_count = User::count();
        $active_tournaments_count = Tournament::where('status', 0)->count();
        $total_prize = Tournament::where('status', 1)->sum('prize'); // Adding total prize calculation


        return view('dashboards.super_owner.index', compact('total_prize', 'club_count', 'active_tournaments_count', 'users_count'));
    }

    public function tournaments()
    {
        return view('dashboards.super_owner.tournaments');
    }

    public function owners()
    {
        return view('dashboards.super_owner.owners');
    }

    public function superAdmins()
    {
        return view('dashboards.super_owner.super-admins');
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
    public function createSuperAdmin(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:255',
        ]);

        try {

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role_id' => 5,
                'whatsapp_number' => $request->input(key: 'whatsapp_number'),
            ]);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}
