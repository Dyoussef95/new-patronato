<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('departamentos')->delete();
        
        DB::table('departamentos')->insert(array (
            0 => 
            array (
                'nombre' => 'MONTEROS',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'ALBERDI',
                'habilitado' => true,
            ),
        ));
        
        
    }
}