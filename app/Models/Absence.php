<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    // Relation avec l'élève
    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'eleve_id');
    }

    // Relation avec la composition
    public function composition()
    {
        return $this->belongsTo(Composition::class, 'composition_id');
    }

    public function inscription()
    {
        return $this->belongsTo(Inscription::class, 'inscription_id');
    }
}
