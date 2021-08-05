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
        return $this->hasMany(NoteMoyenne::class,'id_etudiant');
    }

    public function mg()
    {
        return $this->noteMoyenne()->sum('notemoyenne') / $this->noteMoyenne()->count();

     }



    public function mo()
    {
          $sum_mo = 0;
         foreach ($this->noteMoyenne()->get() as $note){
             if ($this->coeff($note->id_matiere)>0){
             $sum_mo += $note->notemoyenne * $this->coeff($note->id_matiere);
             }
         }
           $sum_n = $sum_mo + $this->mg();
           $sum_coef = $this->sumCoeff()+1;

        return $sum_n/$sum_coef;
    }

    public function coeff($id)
    {

        $mat =MatiereOrientation::where("matiere_id",$id)->where("filiere_id",$this->filiere->id)->first();
        if (!$mat){
            return 0;
        }
        return $mat->coef;
    }

    public function sumCoeff()
    {
        return MatiereOrientation::where("filiere_id",$this->filiere->id)->sum('coef');
    }

}
