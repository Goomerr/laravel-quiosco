<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoProducto extends Model
{
    public function extras()
    {
        return $this->belongsToMany(Extra::class, 'pedido_extras')->withPivot('nombre');
    }
}
