<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getDashboard()
    {
        return view('backend/dashboard');
    }

    public function getSettings() {
        $users = new SettingsController();
        return view('backend/settings/settings', [
            "users" => $users->getUsers()
        ]);
    }

}
