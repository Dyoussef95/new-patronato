<?php

use Illuminate\Database\Seeder;

class TipoDocumentoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipo_documento')->delete();
        
        \DB::table('tipo_documento')->insert(array (
            0 => 
            array (
                'nombre' => 'DNI',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'LC',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'LE',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'CEDULA',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'NS/NC',
                'habilitado' => true,
            ),
        ));
        
        
    }
}