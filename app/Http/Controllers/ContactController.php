<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller {
    public function saveData() {
        $data = request()->validate([
            'name' => 'required|min:3|',
            'email' => 'required|email|',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = $this->filterData(request("name"));
        $contact->user_id = $this->filterData(request("user_id"));
        $contact->email = $this->filterData(request("email"));
        $contact->message = $this->filterData(request("message"));
        $contact->save();

        return view('frontend.home');
    }

    public function getUserAdmin() {
        $users = DB::table('users')->select('id', 'name', 'admin_lvl')->where("admin_lvl", 3)->get();
        return $users;
    }

    private function filterData($string) {
        $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
        return $string;
    }
}
