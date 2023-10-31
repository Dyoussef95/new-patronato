<?php

use Illuminate\Database\Seeder;

class JuzgadoTiposTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('juzgado_tipos')->delete();
        
        \DB::table('juzgado_tipos')->insert(array (
            0 => 
            array (
                'nombre' => 'CAMARA PENAL',
                'habilitado' => true,
            ),
        ));
        
        
    }
}