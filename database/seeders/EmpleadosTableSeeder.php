<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('empleados')->delete();
        
        DB::table('empleados')->insert(array (         
            0 => 
            array (
                'nombre' => 'DAVID',
                'habilitado' => true,
                'user_id' => 1,
                'apellido' => 'YOUSSEF',
            ),
            1 => 
            array (
                'nombre' => 'MELISA',
                'habilitado' => true,
                'user_id' => 2,
                'apellido' => 'FERREYRA',
            ),/*192.168.100.51            
            1 => 
            array (
                'nombre' => 'GABRIELA',
                'habilitado' => true,
                'user_id' => 1,
                'apellido' => 'MORALES',
            ),
            2 => 
            array (
                'nombre' => 'NADIA',
                'habilitado' => true,
                'user_id' => 2,
                'apellido' => 'AID',
            ),
            3 => 
            array (
                'nombre' => 'LUCIANA',
                'habilitado' => true,
                'user_id' => 3,
                'apellido' => 'CORDERO',
            ),
            4 => 
            array (
                'nombre' => 'ELENA',
                'habilitado' => true,
                'user_id' => 4,
                'apellido' => 'PAEZ',
            ),
            5 => 
            array (
                'nombre' => 'CRISTINA',
                'habilitado' => true,
                'user_id' => 5,
                'apellido' => 'PALACIO',
            ),        
            7 => 
            array (
                'nombre' => 'LORENA',
                'habilitado' => true,
                'user_id' => 7,
                'apellido' => 'DELGADO',
            ),
            8 => 
            array (
                'nombre' => 'AMANDA',
                'habilitado' => true,
                'user_id' => 8,
                'apellido' => 'VISUARA',
            ),
            9 => 
            array (
                'nombre' => 'ELISA',
                'habilitado' => true,
                'user_id' => 9,
                'apellido' => 'OVEJERO',
            ),
            10 => 
            array (
                'nombre' => 'EUGENIA',
                'habilitado' => true,
                'user_id' => 10,
                'apellido' => 'MOREL',
            ),
            11 => 
            array (
                'nombre' => 'SERGIO',
                'habilitado' => true,
                'user_id' => 11,
                'apellido' => 'GRAMAJO',
            ),
            12 => 
            array (
                'nombre' => 'KARINA',
                'habilitado' => true,
                'user_id' => 12,
                'apellido' => 'PERALTA',
            ),
            13 => 
            array (
                'nombre' => 'SANDRA',
                'habilitado' => true,
                'user_id' => 13,
                'apellido' => 'SILOS',
            ),
            14 => 
            array (
                'nombre' => 'FEDERICO',
                'habilitado' => true,
                'user_id' => 14,
                'apellido' => 'GOMEZ MORENO',
            ),
            15 => 
            array (
                'nombre' => 'ANDREA',
                'habilitado' => true,
                'user_id' => 15,
                'apellido' => 'SALINA SAID',
            ),
            16 => 
            array (
                'nombre' => 'ANA',
                'habilitado' => true,
                'user_id' => 16,
                'apellido' => 'SISTERNA',
            ),
            17 => 
            array (
                'nombre' => 'GRACIELA',
                'habilitado' => true,
                'user_id' => 17,
                'apellido' => 'SARE',
            )*/
        ));
        
        
    }
}