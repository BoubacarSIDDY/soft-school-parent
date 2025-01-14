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
}
