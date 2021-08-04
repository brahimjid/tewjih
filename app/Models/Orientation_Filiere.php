<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orientation_Filiere extends Model
{
    use HasFactory;
    protected $table= "orientation_filieres";

    public function filiere()
    {
        return $this->belongsTo(Orientation_Filiere::class);
    }

}
