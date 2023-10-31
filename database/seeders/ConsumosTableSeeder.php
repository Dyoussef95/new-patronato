<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsumosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('consumos')->delete();
        
        DB::table('consumos')->insert(array (
            0 => 
            array (
                'objeto_consumo' => 'COCAINA',
                'habilitado' => true,
            ),
            1 => 
            array (
                'objeto_consumo' => 'ALCOHOL',
                'habilitado' => true,
            ),
        ));
        
        
    }
}