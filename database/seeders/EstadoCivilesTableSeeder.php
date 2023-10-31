<?php

use Illuminate\Database\Seeder;

class EstadoCivilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('estado_civiles')->delete();
        
        \DB::table('estado_civiles')->insert(array (
            0 => 
            array (
                'nombre' => 'SOLTERO/A',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'CASADO/A',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'UNIDO/A DE HECHO',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'SEPARADO/A DE HECHO',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'VIUDO/A',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'DIVORCIADO/A',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'NS/NC',
                'habilitado' => true,
            ),
        ));
        
        
    }
}