<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFinales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finales', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('fecha');

            // FOREIGN KEYS

            // Sede
            $table->integer('sede_id')->unsigned();
            $table->foreign('sede_id')
                ->references('sede_id')
                ->on('sedes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            // Carrera
            $table->integer('carrera_id')->unsigned();
            $table->foreign('carrera_id')
                ->references('carrera_id')
                ->on('carreras')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // División
            $table->integer('division_id')->unsigned();
            $table->foreign('division_id')
                ->references('division_id')
                ->on('divisiones')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Año
            $table->integer('anio_id')->unsigned();
            $table->foreign('anio_id')
                ->references('anio_id')
                ->on('anios')
                ->onDelete('restrict')
                ->onUpdate('restrict');

            // Materia
            $table->integer('materia_id')->unsigned();
            $table->foreign('materia_id')
                ->references('materia_id')
                ->on('materias')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Presidente
            $table->integer('presidente')->unsigned();
            $table->foreign('presidente')
                ->references('profesor_id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Primer vocal
            $table->integer('vocal_1')->unsigned();
            $table->foreign('vocal_1')
                ->references('profesor_id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Segundo vocal
            $table->integer('vocal_2')->unsigned();
            $table->foreign('vocal_2')
                ->references('profesor_id')
                ->on('profesores')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Llamado
            $table->integer('llamado_id')->unsigned();
            $table->foreign('llamado_id')
                ->references('llamado_id')
                ->on('llamados')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('table_finales');
    }
}
