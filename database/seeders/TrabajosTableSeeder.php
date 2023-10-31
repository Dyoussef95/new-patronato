<?php

use Illuminate\Database\Seeder;

class TrabajosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trabajos')->delete();
        
        \DB::table('trabajos')->insert(array (
            0 => 
            array (
                'nombre' => 'PROGRAMADOR',
                'habilitado' => true,
            ),
            1 => 
            array (
                'nombre' => 'ALBAñILERIA',
                'habilitado' => true,
            ),
            2 => 
            array (
                'nombre' => 'AGENTE SANITARIO',
                'habilitado' => true,
            ),
            3 => 
            array (
                'nombre' => 'HERRERIA',
                'habilitado' => true,
            ),
            4 => 
            array (
                'nombre' => 'PINTURA',
                'habilitado' => true,
            ),
            5 => 
            array (
                'nombre' => 'AMO/AMA DE CASA',
                'habilitado' => true,
            ),
            6 => 
            array (
                'nombre' => 'ARTE DECORATIVO',
                'habilitado' => true,
            ),
            7 => 
            array (
                'nombre' => 'ARTESANIA',
                'habilitado' => true,
            ),
            8 => 
            array (
                'nombre' => 'AYUDANTE DE ALBAÑIL',
                'habilitado' => true,
            ),
            9 => 
            array (
                'nombre' => 'AYUDANTE DE PANADERIA',
                'habilitado' => true,
            ),
            10 => 
            array (
                'nombre' => 'CHANGARIN',
                'habilitado' => true,
            ),
            11 => 
            array (
                'nombre' => 'CHOFER DE CAMIONES',
                'habilitado' => true,
            ),
            12 => 
            array (
                'nombre' => 'CHOFER DE COLECTIVOS',
                'habilitado' => true,
            ),
            13 => 
            array (
                'nombre' => 'COCINA',
                'habilitado' => true,
            ),
            14 => 
            array (
                'nombre' => 'COMERCIANTE',
                'habilitado' => true,
            ),
            15 => 
            array (
                'nombre' => 'COSECHERIA',
                'habilitado' => true,
            ),
            16 => 
            array (
                'nombre' => 'PANADERIA',
                'habilitado' => true,
            ),
            17 => 
            array (
                'nombre' => 'ELECTRICISTA',
                'habilitado' => true,
            ),
            18 => 
            array (
                'nombre' => 'ENFERMERIA',
                'habilitado' => true,
            ),
            19 => 
            array (
                'nombre' => 'ESTUDIANTE',
                'habilitado' => true,
            ),
            20 => 
            array (
                'nombre' => 'JORNALERIA',
                'habilitado' => true,
            ),
            21 => 
            array (
                'nombre' => 'LIC. EN SEGURIDAD',
                'habilitado' => true,
            ),
            22 => 
            array (
                'nombre' => 'MAESTRANZA',
                'habilitado' => true,
            ),
            23 => 
            array (
                'nombre' => 'MECANICO',
                'habilitado' => true,
            ),
            24 => 
            array (
                'nombre' => 'MECANICO DE MOTOS',
                'habilitado' => true,
            ),
            25 => 
            array (
                'nombre' => 'MILITAR',
                'habilitado' => true,
            ),
            26 => 
            array (
                'nombre' => 'OBSTETRICIA',
                'habilitado' => true,
            ),
            27 => 
            array (
                'nombre' => 'PELUQUERIA',
                'habilitado' => true,
            ),
            28 => 
            array (
                'nombre' => 'POLICIA',
                'habilitado' => true,
            ),
            29 => 
            array (
                'nombre' => 'CHOFER DE TAXI',
                'habilitado' => true,
            ),
            30 => 
            array (
                'nombre' => 'VENDEDOR',
                'habilitado' => true,
            ),
            31 => 
            array (
                'nombre' => 'VERDULERO',
                'habilitado' => true,
            ),
            32 => 
            array (
                'nombre' => 'YESERIA',
                'habilitado' => true,
            ),
            33 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
            34 => 
            array (
                'nombre' => 'OTRO',
                'habilitado' => true,
            ),
            35 => 
            array (
                'nombre' => 'NS/NC',
                'habilitado' => true,
            ),
        ));
        
        
    }
}