<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class extrasPizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            array(
                'nombre' =>  "Pepperoni",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Jamón Serrano",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Bacon",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Salchicha italiana",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Pollo a la parrilla",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Champiñones",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Queso de cabra",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Nata",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Huevo",
                'precio' => 1,
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),

        ];

        DB::table('extra_pizza')->insert($datos);
    }
}