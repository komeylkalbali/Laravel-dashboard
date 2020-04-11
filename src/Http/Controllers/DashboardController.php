<?php

namespace dashboard\src\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{

    public function index()
    {
        return view('dashboard::index');
    }
}
