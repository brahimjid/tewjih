<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function noteMoyenne()
    {
        return $this->hasMany(NoteMoyenne::class );
    }

    public function matiere_orientation()
    {
        return $this->hasMany(MatiereOrientation::class);
    }
}
