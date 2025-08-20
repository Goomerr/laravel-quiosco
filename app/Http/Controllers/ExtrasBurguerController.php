<?php

namespace App\Http\Controllers;

use App\Models\ExtraBurguer;
use Illuminate\Http\Request;
use App\Http\Resources\ExtrasBurguerCollection;

class ExtrasBurguerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new ExtrasBurguerCollection(ExtraBurguer::where('disponible', 1)->orderBy('nombre', 'DESC')->get());
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
    public function update(Request $request, ExtraBurguer $extraBurguer)
    {
        $extraBurguer->estado = 1;
        $extraBurguer->save();
        return [
            'extraBurguer' => $extraBurguer
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
