<?php

namespace App\Http\Controllers;

use App\Http\Resources\ExtrasPizzaCollection;
use App\Models\ExtraPizza;
use Illuminate\Http\Request;

class ExtrasPizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ExtrasPizzaCollection(ExtraPizza::where('disponible', 1)->orderBy('categoria_id', 'DESC')->get());
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
        //
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
    public function update(Request $request, ExtraPizza $extraPizza)
    {
        $extraPizza->estado = 1;
        $extraPizza->save();
        return [
            'extraPizza' => $extraPizza
        ];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}