<?php

use Illuminate\Database\Seeder;

class EnfermedadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('enfermedades')->delete();
        
        \DB::table('enfermedades')->insert(array (
            0 => 
            array (
                'nombre' => 'HEPATITIS A',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'GRIPE',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'SINUSITIS',
                'habilitado' => true,
            ),
        ));
        
        
    }
}