<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

    public function matiere_orientation()
    {
        return $this->hasMany(MatiereOrientation::class);
    }

    public function nouveau_filieres()
    {
       return $this->hasMany(Orientation_Filiere::class,'nouveau_filiere');
     }

}
