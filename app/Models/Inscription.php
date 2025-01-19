<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    protected $table = 'inscription';
    public function eleve() : BelongsTo
    {
        return $this->belongsTo(Eleve::class, 'eleve_id', 'id');
    }
    public function classe() : BelongsTo
    {
        return $this->belongsTo(Classe::class, 'classe_id','id');
    }
    public function annee() : BelongsTo
    {
        return $this->belongsTo(Annee::class, 'annee_id','id');
    }
    /*
     * Recuperation de la derniere inscription d'un eleve
     */
    public static function getLastInscription($matriculeEleve){
         return Inscription::with('classe')->where('IMATR', $matriculeEleve)
             ->latest('DATI')
             ->first(['id','IANNE','eleve_id','classe_id','annee_id']);
    }
    public static function getAnneesInscription($matriculeEleve)
    {
        return Inscription::with('annee')->where('IMATR', $matriculeEleve)->pluck('IANNE','annee_id');
    }
}
