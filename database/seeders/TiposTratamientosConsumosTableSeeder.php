<?php

use Illuminate\Database\Seeder;

class TiposTratamientosConsumosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_tratamientos_consumos')->delete();
        
        \DB::table('tipos_tratamientos_consumos')->insert(array (
            0 => 
            array (
                'nombre' => 'FARMACOLOGICO',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'PSICOLOGICO',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'PSIQUIATRICO',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'REHABILITACION',
                'habilitado' => true,
            ),
        ));
        
        
    }
}