<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;


class SettingsController {

    public function makeUser() {
        $data = request()->validate([
            'name' => 'required|min:3|',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);
        $contact = new User();
        $contact->name = filter_var(request("name"), FILTER_SANITIZE_SPECIAL_CHARS);
        $contact->email = filter_var(request("email"), FILTER_SANITIZE_SPECIAL_CHARS);
        $contact->admin_lvl = filter_var(request("admin"), FILTER_SANITIZE_SPECIAL_CHARS);
        $contact->password = password_hash(request("password"), PASSWORD_BCRYPT);
        $contact->save();

        return back();
    }

    public function getUsers() {
        $users = User::all();
        return $users;
    }

    public function deleteUser() {
        if(!empty(request("deleteUser"))) {
            DB::table('users')->where('id', '=', request('user_id'))->delete();
        }
        return back();
    }
}