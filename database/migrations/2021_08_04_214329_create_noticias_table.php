<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',);
            $table->string('cuerpo',);
            $table->string('adjunto',);
            $table->dateTime('fecha');
            $table->boolean('ocultar');

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
        Schema::dropIfExists('noticias');
        
    }
}
