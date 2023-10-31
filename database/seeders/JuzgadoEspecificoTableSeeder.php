<?php

use Illuminate\Database\Seeder;

class JuzgadoEspecificoTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('juzgado_especifico')->delete();
        
        \DB::table('juzgado_especifico')->insert(array (
            0 => 
            array (
                'nombre' => 'SALA I',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'SALA II',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'SALA III',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'SALA IV',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'SALA V',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'SALA VI',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'CAMARA NUEVO',
                'juzgadoTipo_id' => 1,
                'habilitado' => true,
            ),
        ));
        
        
    }
}