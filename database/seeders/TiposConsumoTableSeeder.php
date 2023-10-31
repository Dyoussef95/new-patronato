<?php

use Illuminate\Database\Seeder;

class TiposConsumoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_consumo')->delete();
        
        \DB::table('tipos_consumo')->insert(array (
            0 => 
            array (
                'nombre' => 'USO',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'ABUSO',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'ADICCION',
                'habilitado' => true,
            ),
        ));
        
        
    }
}