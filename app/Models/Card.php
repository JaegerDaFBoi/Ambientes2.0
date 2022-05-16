<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    public function instructor()
    {
        return $this->hasOne(Instructor::class, 'fk_instructor');
    }

    public function program()
    {
        return $this->hasOne(Program::class, 'fk_programa');
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'fk_ficha');
    }
}
