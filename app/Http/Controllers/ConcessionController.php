<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Concession;



class ConcessionController extends Controller
{
    public function index (int $id) {
        $concession = Concession::find($id);
        return view("concession", [
            'concession' => $concession,
        ]);
    }

    public function showall(){
        $concessions = Concession::all();
        return view('concession.concessions', [
            'concessions' => $concessions,
        ]);
    }

    public function showForm() {
        return view('concession.concessionForm');
    }

    public function createForm(Request $request) {
        $form = new Concession;

        $form->name = $request->name;
        $form->siret = $request->siret;
        $form->phone = $request->phone;

        $form->save();

        return redirect('/concessions');
    }
}
