<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;

    public function program()
    {
        return $this->belongsTo(Program::class, 'fk_programa');
    }

    public function learningoutcomes()
    {
        return $this->hasMany(LearningOutcome::class, 'fk_competencia');
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'fk_competencia');
    }
}
