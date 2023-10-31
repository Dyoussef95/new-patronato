<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(TrabajosTableSeeder::class);
        $this->call(EstadoCivilesTableSeeder::class);
        $this->call(FrecuenciaTableSeeder::class);
        $this->call(AreasTableSeeder::class);
        $this->call(CentrosSaludTableSeeder::class);
        $this->call(ConsumosTableSeeder::class);
        $this->call(DelitosEspecificosTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        //$this->call(EmpleadosTableSeeder::class);
        $this->call(EnfermedadesTableSeeder::class);
        $this->call(JuzgadoEspecificoTableSeeder::class);
        $this->call(JuzgadoTiposTableSeeder::class);
        $this->call(LocalidadesTableSeeder::class);
        $this->call(LugaresTratamientoConsumoTableSeeder::class);
        $this->call(MotivosFinSupervisionTableSeeder::class);
        $this->call(MotivosIngresoProgramaTableSeeder::class);
        $this->call(NacionalidadesTableSeeder::class);
        $this->call(NivelEstudioTableSeeder::class);
        $this->call(ParentescosTableSeeder::class);
        $this->call(RegimenTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(SexosTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(TiposConsumoTableSeeder::class);
        $this->call(TiposDelitosTableSeeder::class);
        $this->call(TiposMotivoIngresoProgramaTableSeeder::class);
        $this->call(TiposTratamientosConsumosTableSeeder::class);
    }
}
