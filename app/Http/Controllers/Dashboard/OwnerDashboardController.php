<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\Club;
use App\Models\Tournament;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class OwnerDashboardController extends Controller
{
    public function index()
    {
        $userId = auth()->id(); // or Auth::id()
        $club = Club::where('owner_id', $userId)->first();

        return view('dashboards.owner.index', compact('club'));
    }

    public function management()
    {
        $roles = Role::whereIn('id', [2, 3])->get();

        return view('dashboards.owner.management', compact('roles'));
    }

    public function tournaments()
    {
        $tournaments = Tournament::all();
        $userId = auth()->id(); // or Auth::id()
        $club = Club::where('owner_id', $userId)->first();
        $players = User::where('club_id', $club->id)->where('role_id', "!=", 1)->get();

        return view('dashboards.owner.tournaments', compact('tournaments', 'players'));
    }

    public function matches()
    {
        return view('dashboards.owner.matches');
    }

    public function createAdmin(Request $request)
    {
        $userId = auth()->id(); // or Auth::id()
        $club = Club::where('owner_id', $userId)->first();

        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'password' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:255',
        ]);

        try {

            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'role_id' => $request->input(key: 'designation'),
                'whatsapp_number' => $request->input(key: 'whatsapp_number'),
                'club_id' => $club->id,
            ]);

            // Redirect back with a success message
            return redirect()->back()->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            // Redirect back with an error message
            return redirect()->back()->withErrors(['error' => 'An error occurred: ' . $e->getMessage()]);
        }
    }
}
