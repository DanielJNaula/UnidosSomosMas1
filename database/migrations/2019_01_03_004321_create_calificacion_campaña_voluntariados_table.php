<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalificacionCampañaVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificacion_campania_voluntariados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comentario_calificacion_campania');
            $table->integer('calificacion_campania');
            $table->boolean('recomendacion_donar_campania')->comment="TRUE: recomienda donar FALSE: no recomienda donar";
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania Calificada";
            $table->foreign('campania_id')->references('id')->on('campania_voluntariados')->onDelete('cascade');
            $table->integer('usuario_id')->unsigned()->index()->comment="id del usuario que realizo la calificacion";
            $table->foreign('usuario_id')->references('id')->on('users')->onDelete('cascade');
            
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
        Schema::dropIfExists('calificacion_campania_voluntariados');
    }
}
