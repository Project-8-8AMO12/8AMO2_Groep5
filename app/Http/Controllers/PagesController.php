<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome() {
        return view('home');
    }

    public function getActiviteiten() {
        return view('activiteiten');
    }

    public function getCursussen() {
        return view('cursussen');
    }

    public function getVereniging() {
        return view('vereniging');
    }

    public function getZwermGezien() {
        return view('zwermGezien');
    }

    public function getLidWorden() {
        return view('lidWorden');
    }
}
