<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function noteMoyenne()
    {
        return $this->hasMany(NoteMoyenne::class);
    }

}
