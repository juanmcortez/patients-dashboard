<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function __invoke()
    {
        return view('pages.dashboard.index');
    }
}
