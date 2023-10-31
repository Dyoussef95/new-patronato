<?php

use Illuminate\Database\Seeder;

class LugaresTratamientoConsumoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lugares_tratamiento_consumo')->delete();
        
        \DB::table('lugares_tratamiento_consumo')->insert(array (
            0 => 
            array (
                'nombre' => 'C.R.E.A.',
                'direccion' => 'PCIA DE LA RIOJA 523',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'ARIADNA',
                'direccion' => 'COMBATE DE LAS PIEDRAS 184',
                'habilitado' => true,
            ),
        ));
        
        
    }
}