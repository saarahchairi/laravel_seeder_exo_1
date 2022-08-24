<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;

class NewPersonnageController extends Controller
{
    public function index(){
        return view('pages.newPersonnage');
    }

    public function store(Request $request){
        $store = new Personnage;
        $store->prenom = $request->prenom;
        $store->age = $request->age;
        $store->email = $request->email;
        $store->telephone = $request->telephone;
        $store->save();
        return redirect('/');
    }
}
