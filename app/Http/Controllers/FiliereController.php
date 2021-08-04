<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FiliereController extends Controller
{

    public function index()
    {
        return view('filieres.index', [
            'filieres' => Filiere::all()
        ]);
    }


    public function create()
    {
        return view('filieres.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validate([
            'nom' => ['required', 'string', 'max:255']
        ]);

        Filiere::create([
            'nom' => $data['nom']
        ]);

        return redirect()->route('filieres.index')
            ->with('message', 'Filiere a ete ajoute');
    }

}
