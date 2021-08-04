<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Matiere;
use App\Models\NoteMoyenne;
use Illuminate\Http\Request;

class NoteMoyenneController extends Controller
{

    public function index()
    {
        return view('notes.index',['notes'=>NoteMoyenne::all()]);
     }
    public function create()
    {
        return view('notes.create', [
            'etudiants' => Etudiant::all(),
            'matieres' => Matiere::all()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "matiere" => ['required'],
            "etudiant" => ['required'],
            "notemoyenne" => ['required', 'max:20', 'min:0', 'numeric']
        ]);

        NoteMoyenne::create([
            "id_matiere" => $data['matiere'],
            "id_etudiant" => $data['etudiant'],
            "notemoyenne" => $data['notemoyenne']
        ]);

        return redirect()->back()->with('message', 'Note a ete ajouter');
    }

}
