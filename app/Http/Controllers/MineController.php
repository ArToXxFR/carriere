<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Mine;

class MineController extends Controller
{
    public function index(int $id) {

        $mine = Mine::find($id);

        return view('concession.mine', [
            'mine' => $mine,
        ]);
    }
}
