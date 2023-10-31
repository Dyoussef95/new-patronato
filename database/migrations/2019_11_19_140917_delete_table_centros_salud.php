<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*Me equivoque en el nombre, tendria que ser CreateTableCentrosSalud*/
class DeleteTableCentrosSalud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_salud', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',100);
            $table->text('direccion')->nullable();
            $table->boolean('habilitado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros_salud');
    }
}
