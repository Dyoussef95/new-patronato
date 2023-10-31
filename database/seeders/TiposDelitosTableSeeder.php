<?php

use Illuminate\Database\Seeder;

class TiposDelitosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_delitos')->delete();
        
        \DB::table('tipos_delitos')->insert(array (
            0 => 
            array (
                'nombre' => 'DELITO CONTRA LA INTEGRIDAD SEXUAL',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'DELITO CONTRA EL ORDEN PúBLICO',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'DELITO CONTRA SEGURIDAD PúBLICA',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'DELITO CONTRA LA ADMINISTRACIóN PúBLICA',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'DELITO CONTRA LA VIDA',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'DELITO CONTRA LA LIBERTAD',
                'habilitado' => true,
            ),
            7 => 
            array (
                'nombre' => 'DELITO CONTRA LA PROPIEDAD',
                'habilitado' => true,
            ),
            8 => 
            array (
                'nombre' => 'LEY 23,737 ESTUPEFACIENTES',
                'habilitado' => true,
            ),
            9 => 
            array (
                'nombre' => 'LESA HUMANIDAD',
                'habilitado' => true,
            ),
        ));
        
        
    }
}