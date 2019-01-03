<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionVoluntariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_voluntarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario_calificacion_usuario');
            $table->integer('calificacion_usuario');
            $table->integer('usuario_id')->unsigned()->index()->comment="id del usuario calificado como voluntario";
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania que realizo la calificacion";
            $table->foreign('campania_id')->references('id')->on('campania_voluntariados')->onDelete('cascade');
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
        Schema::dropIfExists('calificacion_voluntarios');
    }
}
