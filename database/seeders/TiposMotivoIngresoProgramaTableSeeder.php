<?php

use Illuminate\Database\Seeder;

class TiposMotivoIngresoProgramaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipos_motivo_ingreso_programa')->delete();
        
        \DB::table('tipos_motivo_ingreso_programa')->insert(array (
            0 => 
            array (
                'nombre' => 'MUJERES EMBARAZADAS',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'MAYOR DE 70 AÑOS',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'RAZONES DE SALUD',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'OTROS CASOS CONSIDERADOS POR LOS JUECES',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'MADRES DE NIÑOS MENORES',
                'habilitado' => true,
            ),
        ));
        
        
    }
}