<?php

namespace App\Http\Controllers;
use App\Models\Matiere;
use App\Models\MatiereOrientation;
use Illuminate\Http\Request;


class MatiereController extends Controller
{

    public function index()
    {
        return view('matieres.index')
            ->with('matieres', Matiere::paginate(5));
    }
    public function getMatiereOrientation()
    {
        MatiereOrientation::with('matiere')->get();
//        dd( MatiereOrientation::with('matieres')->get());
      // return response()->json(MatiereOrientation::with('matiere')->get());
        return view('matieres.matiereOrientation',[
            'matieres_orientations'=>MatiereOrientation::with('matiere')->paginate(5),
        ]);

    }

    public function MatiereOrientationCreate()
    {
        return view('matieres.createMatiereOrientation',
             [
                 'matieres'=>Matiere::all(),
                 'filieres'=>Matiere::all(),
             ]
        );
    }


    public function create()
    {
        return view('matieres.create');
    }


    public function store(Request $request)
    {

        $data = $request->validate([
            "nom" => ['required', 'string', 'max:255'],
            "code" => ['required' , 'string', 'max:255'],

        ]);

        Matiere::create([
            'nom' => $data['nom'],
            'code' => $data['code'],

        ]);

        return redirect()
            ->route('matieres.index')
            ->with('message', 'Une matiere a ete ajoute');
    }
}

