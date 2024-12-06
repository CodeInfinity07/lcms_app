<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class MemberDashboardController extends Controller
{
    public function index()
    {
        return view('dashboards.member.index');
    }
}
