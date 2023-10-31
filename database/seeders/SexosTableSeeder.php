<?php

use Illuminate\Database\Seeder;

class SexosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sexos')->delete();
        
        \DB::table('sexos')->insert(array (
            0 => 
            array (
                'nombre' => 'MASCULINO',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'FEMENINO',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
        ));
        
        
    }
}