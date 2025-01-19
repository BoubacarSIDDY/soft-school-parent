<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MatiereClasse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'matieres_classes';
    protected $fillable = [
        'class_id',
        'matiere_id',
        'coefficient',
        'professeur_id',
        'annee_id'
    ];

    public function matiere() : BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }

    public function classe() : BelongsTo
    {
        return $this->belongsTo(Classe::class, 'class_id');
    }
}
