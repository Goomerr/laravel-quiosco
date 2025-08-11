<?php

namespace App\Http\Controllers;

use App\Http\Resources\IngredienteCollection;
use App\Models\Ingrediente;
use Illuminate\Http\Request;

class IngredienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new IngredienteCollection(Ingrediente::where('disponible', 1)->orderBy('categoria_id', 'DESC')->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingrediente $ingrediente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingrediente $ingrediente)
    {
        $ingrediente->estado = 1;
        $ingrediente->save();
        return [
            'ingrediente' => $ingrediente
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingrediente $ingrediente)
    {
        //
    }
}
