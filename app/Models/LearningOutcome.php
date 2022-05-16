<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearningOutcome extends Model
{
    use HasFactory;

    public function competence()
    {
        return $this->belongsTo(Competence::class, 'fk_competencia');
    }
}
