<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtudiantChoix extends Model
{
    use HasFactory;
  protected $table = "etudiant_choix";
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
