<?php

use Illuminate\Database\Seeder;

class ParentescosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('parentescos')->delete();
        
        \DB::table('parentescos')->insert(array (
            0 => 
            array (
                'nombre' => 'MADRE/PADRE',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'HIJO/A',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'HERMANO/A',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'ESPOSO/A',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'NIETO/A',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'CONCUBINO/A',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'CUÑADO/A',
                'habilitado' => true,
            ),
            7 => 
            array (
                'nombre' => 'SUEGRO/A',
                'habilitado' => true,
            ),
            8 => 
            array (
                'nombre' => 'SOBRINO/A',
                'habilitado' => true,
            ),
            9 => 
            array (
                'nombre' => 'TIO/A',
                'habilitado' => true,
            ),
            10 => 
            array (
                'nombre' => 'PRIMO/A',
                'habilitado' => true,
            ),
            11 => 
            array (
                'nombre' => 'YERNO/NUERA',
                'habilitado' => true,
            ),
            12 => 
            array (
                'nombre' => 'AMIGO/A',
                'habilitado' => true,
            ),
            13 => 
            array (
                'nombre' => 'NS/NC',
                'habilitado' => true,
            ),
        ));
        
        
    }
}