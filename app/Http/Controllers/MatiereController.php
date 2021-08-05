<?php

namespace App\Http\Controllers;
use App\Models\Filiere;
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
                 'filieres'=>Filiere::all(),
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

    public function storeMatiereOrientation(Request $request)
    {
//      dd($request->all());
        $data = $request->validate([
            "matiere_id" => ['required'],
            "filiere_id" => ['required'],
            "coefficient" => ['required'],

        ]);

        MatiereOrientation::create([
            'matiere_id' => $data['matiere_id'],
            'filiere_id' => $data['filiere_id'],
            'coef' => $data['coefficient'],

        ]);

        return redirect()
            ->route('matieres.orientation.create')
            ->with('message', "Une matiere D'orientation a ete ajoute");
    }
}

