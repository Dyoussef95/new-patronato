<?php

use Illuminate\Database\Seeder;

class RegimenTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regimen')->delete();
        
        \DB::table('regimen')->insert(array (
            0 => 
            array (
                'nombre' => 'CON TOBILLERA',
                'area_id' => 2,
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'SIN TOBILLERA',
                'area_id' => 2,
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'CONDENA CONDICIONAL',
                'area_id' => 4,
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'PROBATION',
                'area_id' => 4,
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'LIBERTAD ASISTIDA',
                'area_id' => 3,
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'LIBERTAD CONDICIONAL',
                'area_id' => 3,
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'PROCESADO EXCARCELADO',
                'area_id' => 3,
                'habilitado' => true,
            ),
        ));
        
        
    }
}