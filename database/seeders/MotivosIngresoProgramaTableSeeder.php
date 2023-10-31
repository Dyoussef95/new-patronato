<?php

use Illuminate\Database\Seeder;

class MotivosIngresoProgramaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('motivos_ingreso_programa')->delete();
        
        \DB::table('motivos_ingreso_programa')->insert(array (
            0 => 
            array (
                'nombre' => 'MUJERES EMBARAZADAS',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 2,
            ),
            1 => 
            array (
            'nombre' => 'MADRES DE NIñOS MENORES DE CINCO (5) AñOS O DE UNA PERSONA CON DISCAPACIDAD, A SU CARGO',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 6,
            ),
            2 => 
            array (
            'nombre' => 'MADRES DE NIñOS ENTRE CINCO (5) Y DIEZ (10) AñOS, SIEMPRE QUE LA AUTORIDAD JUDICIAL COMPETENTE CONSIDERE RAZONABLE OTORGAR EL ARRESTO DOMICILIARIO COMO EXCEPCIóN A LO PREVISTO NORMATIVAMENTE',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 6,
            ),
            3 => 
            array (
                'nombre' => 'INTERNO/A QUE PADEZCA UNA ENFERMEDAD INCURABLE EN PERIODO TERMINAL',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 4,
            ),
            4 => 
            array (
                'nombre' => 'INTERNO/A ENFERMO/A, CUANDO LA PRIVACIóN DE LA LIBERTAD EN EL ESTABLECIMIENTO CARCELARIO LE IMPIDA RECUPERARSE O TRATAR ADECUADAMENTE SU DOLENCIA Y NO CORRESPONDIERE SU ALOJAMIENTO EN UN ESTABLECIMIENTO HOSPITALARIO',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 4,
            ),
            5 => 
            array (
                'nombre' => 'INTERNO/A DISCAPACITADO/A, CUANDO LA PRIVACIóN DE LA LIBERTAD EN EL ESTABLECIMIENTO CARCELARIO ES INADECUADA POR SU CONDICIóN, IMPLICáNDOLE UN TRATO INDIGNO, INHUMANO O CRUEL',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 4,
            ),
            6 => 
            array (
            'nombre' => 'INTERNO/A MAYOR DE SETENTA (70) AñOS',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 3,
            ),
            7 => 
            array (
                'nombre' => 'INTERNO/A QUE HAYA SIDO CONSIDERADO POR EL ORGANISMO TéCNICO‐CRIMINOLóGICO COMO DE BAJA PELIGROSIDAD Y/O SE ENCUENTRE TRANSITANDO EL úLTIMO TERCIO DE SU CONDENA  ‐CUANDO OTRO BENEFICIO LE HUBIERE SIDO DENEGADO‐, SIEMPRE QUE LA AUTORIDAD JUDICIAL COMPETENTE CONSIDERE RAZONABLE OTORGAR EL ARRESTO DOMICILIARIO COMO EXCEPCIóN A LO PREVISTO NORMATIVAMENTE',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 5,
            ),
            8 => 
            array (
                'nombre' => 'INTERNO/A PERTENECIENTE AL COLECTIVO LGBT',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 5,
            ),
            9 => 
            array (
                'nombre' => 'OTROS CASOS CONSIDERADOS POR LOS JUECES INTERVINIENTES',
                'habilitado' => true,
                'tipo_motivo_ingreso_programa_id' => 5,
            ),
        ));
        
        
    }
}