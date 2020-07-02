<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendPagesController extends Controller
{

    public function __construct() {
        $this->cms = new CMSController();
    }

    public function getHome() {
        $sections = $this->cms->getSections('home');

        return view('frontend.home', compact('sections'));
    }

    public function getActiviteiten() {
        $sections = $this->cms->getSections('activiteiten');

        return view('frontend.activiteiten', compact('sections'));
    }

    public function getCursussen() {
        $sections = $this->cms->getSections('cursussen');

        return view('frontend.cursussen', compact('sections'));
    }

    public function getVereniging() {
        $sections = $this->cms->getSections('vereniging');

        return view('frontend.vereniging', compact('sections'));
    }

    public function getZwermGezien() {
        $sections = $this->cms->getSections('zwermgezien');

        return view('frontend.zwermGezien', compact('sections'));
    }

    public function getHetBlad() {
        $sections = $this->cms->getSections('hetblad');

        return view('frontend.hetblad', compact('sections'));
    }

    public function getLidWorden() {
        $sections = $this->cms->getSections('lidworden');

        return view('frontend.lidWorden', compact('sections'));
    }

    public function getBijenstal() {
        $sections = $this->cms->getSections('bijenstal');

        return view('frontend.bijenstal', compact('sections'));
    }

    public function getContact() {
        $users = DB::table('users')->select('id', 'name', 'admin_lvl')->get();

        foreach ($users as $user) {
            if($user->admin_lvl >= 3) {
                return view("frontend/contact", [
                    "admins" => $users
                ]);
            }
        }

        $sections = $this->cms->getSections('contact');

        return view("frontend/contact", compact('sections'));
    }
}
