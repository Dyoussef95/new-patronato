<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentrosSaludTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('centros_salud')->delete();
        
        DB::table('centros_salud')->insert(array (
            0 => 
            array (
                'nombre' => 'HOSPITAL PADILLA',
                'direccion' => 'JUAN BAUTISTA ALBERDI 550',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'HOSPITAL CENTRO DE SALUD',
                'direccion' => 'AV. AVELLANEDA 750',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'HOSPITAL AVELLANEDA',
                'direccion' => 'AV AVELLANEDA 123',
                'habilitado' => true,
            ),
        ));
        
        
    }
}