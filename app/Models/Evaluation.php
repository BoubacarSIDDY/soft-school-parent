<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Evaluation extends Model
{
    use HasFactory;
    public function composition() : BelongsTo
    {
        return $this->belongsTo(Composition::class);
    }

    public function cycle() : BelongsTo
    {
        return $this->belongsTo(Cycle::class);
    }
}
