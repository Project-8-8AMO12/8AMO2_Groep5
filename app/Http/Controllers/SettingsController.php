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
        $users = DB::table('users')->where('deleted', '=', 0)->get();
        return $users;
    }

    public function deleteUser() {
        if(!empty(request("deleteUser"))) {
            $userId = filter_var(request("user_id"), FILTER_SANITIZE_SPECIAL_CHARS);
            DB::table('users')->where('deleted', '=', 0)->where('id', '=', $userId)->update(['deleted' => 1]);
        }
        return back();
    }

    public function editUser() {
        if(!empty(request("user_id"))) {
            $user = DB::table('users')->where('id', '=', request('user_id'))->where('deleted', '=', 0)->get();
            return view('backend/settings/editUsers', [
                'user' => $user
            ]);
        }
    }

    public function saveEdit() {
        $data = request()->validate([
            'name' => 'required|min:3|',
            'email' => 'required|email|',
            'password' => 'required',
            'admin' => 'required'
        ]);
        $name = filter_var(request("name"), FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_var(request("email"), FILTER_SANITIZE_SPECIAL_CHARS);
        $admin_lvl = filter_var(request("admin"), FILTER_SANITIZE_SPECIAL_CHARS);
        $password = password_hash(request("password"), PASSWORD_BCRYPT);
        $user = DB::table('users')->where('deleted', '=', 0)->where('id', '=', request('user_id'))->update(['name' => $name, 'email' => $email, 'password' => $password, 'admin_lvl' => $admin_lvl]);
        return view('backend/dashboard');
    }
}
