<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoExtra extends Model
{
    public function extras()
    {
        return $this->belongsToMany(Extra::class, 'extras')->withPivot('disponible');
    }
}
