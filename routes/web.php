<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteMoyenneController;
use App\Models\CoefOrientation;
use App\Models\Etudiant;
use App\Models\Orientation_Filiere;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    dd(Etudiant::find(1)->choix);
//    foreach (Etudiant::all() as $item) {
//         dump($item->mo());
//    }
    return view('dashboard');
})->name('dashboard');

//Route::get('/notes', [NotesController::class,'index'])->name('notes.index');
//Route::get('/filieres', [NotesController::class,'filiers'])->name('filieres.index');
//Route::get('/notes/create', [NotesController::class,'create'])->name('notes.create');


// Resources routes
Route::resource('etudiants' , EtudiantController::class);
Route::resource('matieres' , MatiereController::class);
Route::resource('filieres' , FiliereController::class);
Route::resource('notes', NoteMoyenneController::class);
Route::get('/matieres_orientation/create',[MatiereController::class,'MatiereOrientationCreate'])->name('matieres.orientation.create');
Route::get('/matieres_orientation',[MatiereController::class,'getMatiereOrientation'])->name('matieres.orientation.index');
Route::post('/matieres_orientation/store',[MatiereController::class,'storeMatiereOrientation'])->name('matieres.orientation.store');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
