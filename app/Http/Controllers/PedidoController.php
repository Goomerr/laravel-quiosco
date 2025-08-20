<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\PedidoExtra;
use App\Models\Pedido;
use Carbon\Traits\ToStringFormat;
use Illuminate\Http\Request;
use App\Models\PedidoProducto;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\PedidoCollection;

use function PHPSTORM_META\map;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new PedidoCollection(Pedido::with('user')->with('productos')->where('estado', 0)->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Almacenar pedidos
        $pedido = new Pedido;
        $pedido->user_id = Auth::user()->id;
        $pedido->total = $request->total;
        $pedido->extras_total = $request->extras_total;
        $pedido->save();

        //Obtener el ID del Pedido
        $id = $pedido->id;
        //Obtener los productos del pedido
        $productos = $request->productos;


        //Formatear el arreglo
        $pedido_producto = [];
        $pedido_extras = [];

        foreach ($productos as $producto) {
            $producto_id = $producto['id'];
            $extras = $producto['extras'];
            $pedido_producto[] = [
                'pedido_id' => $id,
                'producto_id' => $producto['id'],
                'cantidad' => $producto['cantidad'],
                'extras' => json_encode($extras),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        foreach ($extras as $extra) {
            $pedido_extras[] = [
                'nombre' => $extra['nombre'],
                'producto_id' => $producto_id,
                'pedido_id' => $id,
                'extra_id' => $extra['id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        //Guardar en la BD
        PedidoProducto::insert($pedido_producto);
        PedidoExtra::insert($pedido_extras);

        return [
            'message' => 'Pedido realizado, estará listo en unos minutos, gracias',

        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->estado = 1;
        $pedido->save();
        return [
            'pedido' => $pedido
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
