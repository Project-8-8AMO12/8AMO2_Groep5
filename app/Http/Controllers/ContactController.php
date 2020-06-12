<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function saveData() {
        $data = request()->validate([
            'name' => 'required|min:3|',
            'email' => 'required|email|',
            'message' => 'required'
        ]);
        $contact = new Contact();
        $contact->name = request("name");
        $contact->user_id = 1;
        $contact->email = request("email");
        $contact->message = request("message");
        $contact->save();

        return view('home');
    }

}
