<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ShowUser extends Controller
{
    public function showAllUsers () {
        $users = User::all();

        return view('user.showAll', [
            "users" => $users,
        ]);
    }
}
