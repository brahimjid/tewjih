<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Transport\MailgunTransport;

class NoteMoyenne extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiant');
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class, 'id_matiere');
    }

    public function note($id)
    {
      $mat =MatiereOrientation::where("matiere_id",$this->id)->where("filiere_id",$id)->first();
       return $mat->coef * $this->notemoyenne;
    }
}
