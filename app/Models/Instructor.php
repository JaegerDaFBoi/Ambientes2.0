<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;

    public function area()
    {
      return $this->hasOne(Area::class, 'fk_area');
    }

    public function card()
    {
        return $this->belongsTo(Card::class, 'fk_instructor', 'id');
    }

    public function assignment()
    {
        return $this->belongsTo(Assignment::class, 'fk_instructor');
    }
}
