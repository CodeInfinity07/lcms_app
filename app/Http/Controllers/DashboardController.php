<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tournament;

class DashboardController extends Controller
{
    public function home()
    {
        $tournaments = Tournament::all();
        return view('index', compact('tournaments'));
    }
}
