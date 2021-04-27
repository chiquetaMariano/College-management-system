<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('materia_id');
            $table->string('materia_dn', 70);

            // FOREIGN KEYS

            // Carrera
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')
                ->references('carrera_id')
                ->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Año
            $table->integer('anio_id')->unsigned();
            $table->foreign('anio_id')
                ->references('anio_id')
                ->on('anios')
                ->onUpdate('restrict')
                ->onDelete('restrict');

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
        Schema::dropIfExists('materias');
    }
}
