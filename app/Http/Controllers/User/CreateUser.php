<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Concession;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class CreateUser extends Controller
{
    public function createUser(Request $request) {
        User::create([
            "firstname" => $request->firstname,
            "lastname" => $request->lastname,
            "mail" => $request->mail,
            "phone" => $request->phone,
            "concession_id" => $request->concession,
            "role_id" => $request->role,
        ]);

        return to_route('user.create.form');
    }

    public function createUserForm() {
        $concessions = Concession::all();
        $roles = Role::all();
        return view('user.addUser', [
            "concessions" => $concessions,
            "roles" => $roles,
        ]);
    }
}
