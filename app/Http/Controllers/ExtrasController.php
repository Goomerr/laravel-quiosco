<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Extra;
use App\Models\Ingrediente;
use Illuminate\Http\Request;
use App\Http\Resources\ExtrasCollection;
use Laravel\Pail\ValueObjects\Origin\Console;

class ExtrasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ExtrasCollection(Extra::where('disponible', 1)->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //Almacenar pedidos
        $extra = new Extra;
        $extra->save();
        //Obtener el ID del extra
        $id = $extra->id;
        //Obtener los productos del extra
        $extras_pedido = $request->extras;

        //Formatear el arreglo
        $extras = [];

        foreach ($extras_pedido as $extra_pedido) {
            $extras[] = [
                'extra_id' => $id,
                'nombre' => $extra_pedido['nombre'],
                'categoria_id' => $extra_pedido['categoria_id'],
                'ingrediente_id' => $extra_pedido['ingrediente_id'],
                'precio' => $extra_pedido['precio'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        //Guardar en la BD
        Extra::insert($extras);

        return [
            'message' => 'Extras Añadidos',

        ];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}