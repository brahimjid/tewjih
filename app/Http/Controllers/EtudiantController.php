<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{

    public function index()
    {
        return view('etudiants.list' , [
            'etudiants' => Etudiant::all()
        ]);
    }


    public function create()
    {
        return view('etudiants.create' , [
            'filieres' => Filiere::all()
        ]);
    }


    public function store(Request $request)
    {
//        dd($request->all());

        $this->validate($request, [
            'matricule' => ['required' , 'unique:etudiants'],
            'nom' => ['required' , 'max:255', 'string'],
            'prenom' => ['required' , 'max:255', 'string'],
            'date_nais' => ['required' , 'date'],
            'filiere' => ['required'],
        ]);

        $etudiant = new Etudiant();
        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naiss = $request->input('date_nais');
        $etudiant->filiere_id = $request->input('filiere');

        $etudiant->save();

        return redirect()->route('etudiants.index')
            ->with('message', 'Etudiant a ete ajoute');

    }



    public function edit(Etudiant $etudiant)
    {
        return view('etudiants.edit', [
            'etudiant' => $etudiant,
            'filieres' => Filiere::all()
        ]);
    }


    public function update(Request $request, Etudiant $etudiant)
    {
        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naiss = $request->input('date_nais');
        $etudiant->filiere_id = $request->input('filiere');

        $etudiant->save();

        return redirect()->route('etudiants.index')->with('message', "Etudiant est modifie");
    }


    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();

        return redirect()->route('etudiants.index')
            ->with('message', 'Etudiant est bien supprime');
    }
}
