<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('areas')->delete();

        DB::table('areas')->insert([
            ['nombre' => 'EJECUCIÓN DE LA PENA', 'habilitado' => true],
            ['nombre' => 'MEDIO LIBRE', 'habilitado' => true],
            ['nombre' => 'ARRESTO DOMICILIARIO', 'habilitado' => true],
        ]);
       
        /*
        DB::table('areas')->insert(array (
            0 => 
            array (
                'nombre' => 'EJECUCION DE LA PENA',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'MEDIO LIBRE',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'ARRESTO DOMICILIARIO',
                'habilitado' => true,
            ),
        ));
        */
    }
}
