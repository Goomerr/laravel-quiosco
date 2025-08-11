<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function extras()
    {
        return $this->belongsToMany(Extra::class, 'extra')->withPivot('nombre');
    }
}