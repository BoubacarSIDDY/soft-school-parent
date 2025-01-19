<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
    use HasFactory;

    // Relation avec les absences
    public function absences()
    {
        return $this->hasMany(Absence::class, 'composition_id');
    }
}
