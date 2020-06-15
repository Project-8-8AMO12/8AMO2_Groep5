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
    public function index()
    {
        return view('backend/dashboard');
    }

    public function getCMS() {
        return view('backend/CMS/CMS');
    }

    public function getCMSPages() {
        return view('backend/CMS/pages');
    }

    public function getCMSPartials() {
        return view('backend/CMS/partials');
    }

    public function getCMSContent() {
        return view('backend/CMS/content');
    }

    public function getCMSAssets() {
        return view('backend/CMS/assets');
    }

    public function getSettings() {
        return view('backend/settings/settings');
    }
}
