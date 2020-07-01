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
        $users = new User();
        $users->name = filter_var(request("name"), FILTER_SANITIZE_SPECIAL_CHARS);
        $users->email = filter_var(request("email"), FILTER_SANITIZE_SPECIAL_CHARS);
        $users->admin_lvl = filter_var(request("admin"), FILTER_SANITIZE_SPECIAL_CHARS);
        $users->password = password_hash(request("password"), PASSWORD_BCRYPT);
        $users->save();

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

    public function editUser() {
        if(!empty(request("user_id"))) {
            $user = DB::table('users')->where('id', '=', request('user_id'))->get();
            return view('backend/settings/editUsers', [
                'user' => $user
            ]);
        }
    }

    public function saveEdit() {
        $data = request()->validate([
            'name' => 'required|min:3|',
            'email' => 'required|email|',
            'admin' => 'required'
        ]);
        $user = DB::table('users')->where('id', '=', request('user_id'))->update(['name' => request('name'), 'email' => request('email'), 'admin_lvl' => request('admin')]);
        return view('backend/dashboard');
    }
}
