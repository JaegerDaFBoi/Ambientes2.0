<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    public function card()
    {
        return $this->belongsTo(Card::class, 'fk_programa', 'id');
    }

    public function competences()
    {
        return $this->hasMany(Competence::class, 'fk_programa');
    }
}
