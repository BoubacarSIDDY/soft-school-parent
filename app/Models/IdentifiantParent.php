<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class IdentifiantParent extends Authenticatable
{
    use HasFactory;
    protected $table = 'identifiants_parents';
    protected $fillable = ['phone', 'password', 'name', 'lastName','who'];

    public static function eleves($parent)
    {
        return Eleve::where($parent->who,$parent->phone)
            ->get(['id','MATR','NOMM','PREN','SEXE','DNAI','LIEU','NATI']);
    }
}
