<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class extrasBurguerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $datos = [
            array(
                'nombre' => "Pan de hamburguesa Casero",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Carne de Ternera Wagyu",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Queso cheddar",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Lechuga",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Tomate",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Cebolla morada",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Pepinillos",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Beicon",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Huevo",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Salsa BBQ",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Salsa Fresh",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Mayonesa",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' => "Mostaza",
                'precio' => 1,
                'categoria_id' => 2,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];
        DB::table('extra_burguer')->insert(($datos));
    }
}