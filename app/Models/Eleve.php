<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $table = 'eleve';
    public function Inscriptions()
    {
        return $this->hasOne(Inscription::class, 'eleve_id');
    }
}
