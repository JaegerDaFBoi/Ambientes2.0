<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    public function instructor()
    {
        return $this->hasOne(Instructor::class, 'fk_instructor');
    }

    public function environment()
    {
        return $this->hasOne(Environment::class, 'fk_ambiente');
    }

    public function card()
    {
        return $this->hasOne(Card::class, 'fk_ficha');
    }

    public function competence()
    {
        return $this->hasOne(Competence::class, 'fk_competencia');
    }
}
