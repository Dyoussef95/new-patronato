<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('roles')->delete();
        
        DB::table('roles')->insert(array (
            0 => 
            array (
                'nombre' => 'DISEÑADOR/A',
                'codigo' => 1,
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'DIRECTORA',
                'codigo' => 2,
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'ADMINISTRADOR/A',
                'codigo' => 3,
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'PROFESIONAL',
                'codigo' => 4,
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'MESA DE ENTRADA',
                'codigo' => 5,
                'habilitado' => true,
            ),
        ));
        
        
    }
}