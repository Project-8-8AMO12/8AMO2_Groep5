<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function getHome() {
        return view('frontend.home');
    }

    public function getActiviteiten() {
        return view('frontend.activiteiten');
    }

    public function getCursussen() {
        return view('frontend.cursussen');
    }

    public function getVereniging() {
        return view('frontend.vereniging');
    }

    public function getZwermGezien() {
        return view('frontend.zwermGezien');
    }

    public function getHetBlad() {
        return view('frontend.hetblad');
    }

    public function getLidWorden() {
        return view('frontend.lidWorden');
    }

    public function getBijenstal() {
        return view('frontend.bijenstal');
    }

    public function getDashboard() {
        return view('backend.dashboard');
    }

    public function getWinkel() {
        return view('frontend.winkel');
    }

    public function getContact() {
        $users = new ContactController();
        return view("frontend/contact", [
            "admins" => $users->getUserAdmin()
        ]);

    }
}
