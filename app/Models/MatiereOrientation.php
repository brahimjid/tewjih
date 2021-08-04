<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MatiereOrientation extends Model
{
    use HasFactory;

    public function filiere()
    {
        return $this->belongsTo(Filiere::class,'filiere_id');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class,'matiere_id');
    }
}
