<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Club;
use App\Models\Tournament;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function owners()
    {
        $users = User::where('role_id', 1)->get();
        return response()->json($users);
    }

    public function all_users()
    {
        $users = User::orderByRaw('CASE WHEN role_id = 3 THEN 1 ELSE 0 END, role_id DESC')->get();
        return response()->json($users);
    }
    public function tournaments()
    {
        $tournament = Tournament::all();
        return response()->json($tournament);
    }

    public function admins()
    {
        $userId = auth()->id(); // or Auth::id()
        $club = Club::where('owner_id', $userId)->first();
        $clubId = $club->id;
        $users = User::where('club_id', $clubId)
            ->orderBy('role_id', 'asc') // Sort by role_id in ascending order
            ->get();
        return response()->json($users);
    }

    public function delete(Request $request, $id)
    {
        // Get the authenticated user
        $user = auth()->user();


        // Check if the user's role_id is >= 5
        if ($user->role_id < 5) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Find the user to delete
        $userToDelete = User::find($id);

        if (!$userToDelete) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Delete the user
        $userToDelete->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
    public function deleteUser(Request $request, $id)
    {
        // Get the authenticated user
        $user = auth()->user();


        // Check if the user's role_id is >= 5
        if ($user->role_id < 5) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        // Find the user to delete
        $userToDelete = User::find($id);

        if (!$userToDelete) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Delete the user
        $userToDelete->delete();

        return response()->json(['message' => 'User deleted successfully'], 200);
    }

    public function deleteAdmin(Request $request, $id)
    {
        // Get the authenticated user
        $user = auth()->user();

        // Find the user to delete
        $userToDelete = User::find(id: $id);

        if (!$userToDelete) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Check if the user's role_id is >= 5
        if ($user->role_id == 1 && $user->club_id == $userToDelete->club_id) {
            $userToDelete->delete();
        } else {
            return response()->json(['error' => 'Unauthorized'], 403);

        }

        return response()->json(['message' => 'User deleted successfully'], 200);
    }
}
