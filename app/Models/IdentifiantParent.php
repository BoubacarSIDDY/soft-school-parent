<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IdentifiantParent extends Model
{
    protected $table = 'identifiants_parents';
    protected $fillable = ['phone', 'password', 'name', 'lastName'];
}
