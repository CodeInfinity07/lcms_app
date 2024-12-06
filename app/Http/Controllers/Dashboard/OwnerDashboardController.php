<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class OwnerDashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.owner.index');
    }

    public function management()
    {
        return view('dashboards.owner.management');
    }

    public function tournaments()
    {
        return view('dashboards.owner.tournaments');
    }

    public function matches()
    {
        return view('dashboards.owner.matches');
    }
}
