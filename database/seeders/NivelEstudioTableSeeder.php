<?php

use Illuminate\Database\Seeder;

class NivelEstudioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nivel_estudio')->delete();
        
        \DB::table('nivel_estudio')->insert(array (
            0 => 
            array (
                'nombre' => 'PRIMARIO INCOMPLETO',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'PRIMARIO COMPLETO',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'SECUNDARIO INCOMPLETO',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'SECUNDARIO COMPLETO',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'TERCIARIO INCOMPLETO',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'TERCIARIO COMPLETO',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'UNIVERSITARIO INCOMPLETO',
                'habilitado' => true,
            ),
            7 => 
            array (
                'nombre' => 'UNIVERSITARIO COMPLETO',
                'habilitado' => true,
            ),
            8 => 
            array (
                'nombre' => 'SIN ESTUDIOS',
                'habilitado' => true,
            ),
            9 => 
            array (
                'nombre' => 'NS/NC',
                'habilitado' => true,
            ),
        ));
        
        
    }
}