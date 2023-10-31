<?php

use Illuminate\Database\Seeder;

class NacionalidadesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nacionalidades')->delete();
        
        \DB::table('nacionalidades')->insert(array (
            0 => 
            array (
                'nombre' => 'ARGENTINA',
                'habilitado' => true,
            ),
        ));
        
        
    }
}