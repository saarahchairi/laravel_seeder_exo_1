<?php

namespace App\Http\Controllers;

use App\Models\Personnage;
use Illuminate\Http\Request;

class PersonnageController extends Controller
{
    public function index(){
        $allPersonnage = Personnage::all();
        return view('personnages', compact('allPersonnage'));
    }

    public function destroy($id){
        $destroy = Personnage::find($id);
        $destroy->delete();
        return redirect()->back();
    }

    public function show($id){
        $id_show = Personnage::find($id);
        return view('pages.editPersonnage', compact('id_show'));
    }

    public function update(Request $request, $id){
        $editable = Personnage::find($id);
        $editable->prenom = $request->prenom;
        $editable->age = $request->age;
        $editable->email = $request->email;
        $editable->telephone = $request->telephone;
        $editable->save();
        return redirect()->back();
    }

    public function supression(){
        $supr = Personnage::truncate();
        return redirect('/');
    }

}
