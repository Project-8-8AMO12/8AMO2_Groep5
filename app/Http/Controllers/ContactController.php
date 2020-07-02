<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        return back();
    }

    public static function getUserAdmin() {
        $users = DB::table('users')->select('id', 'name', 'admin_lvl')->where("admin_lvl", 3)->get();
        return $users;
    }

    private function filterData($string) {
        $string = filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS);
        return $string;
    }

    public function getContact() {
        $contact = DB::table('contacts')->select('id', 'name', 'email', 'message')->where('user_id', '=', Auth::id())->get();
        if(!empty($contact)) {
            return view('backend/contact/contact', [
                'contact' => $contact
            ]);
        } else {
            return view('backend/contact/contact');
        }
    }

    public function delContact() {
        $contact = DB::table('contacts')->where('id', '=', request('conId'))->delete();
        return back();
    }
}
