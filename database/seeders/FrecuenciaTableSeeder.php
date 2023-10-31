<?php

use Illuminate\Database\Seeder;

class FrecuenciaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('frecuencia')->delete();
        
        \DB::table('frecuencia')->insert(array (
            0 => 
            array (
                'nombre' => 'MENSUAL',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'SEMANAL',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'QUINCENAL',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'BIMESTRAL',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'TRIMESTRAL',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'SEMESTRAL',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
        ));
        
        
    }
}