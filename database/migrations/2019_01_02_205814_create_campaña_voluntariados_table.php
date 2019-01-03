<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampañaVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campania_voluntariados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imagen_presentacion')->comment="Imagen de presentacion campania";
            $table->string('titulo_campania');
            $table->string('descripcion_corta_campania');
            $table->boolean('temporada_campania')->comment="TRUE: campania permanente  FALSE:campania parcial";
            $table->date('fecha_limite_campania')->nullable()->comment="Fecha limite donde la campania puede recibir donaciones";
            $table->string('ubicacion_campania')->comment="Ubicacion donde se realizara el voluntariado de la campania";
            $table->string('video_portada_campania')->nullable();
            $table->string('imagen_portada_campania')->nullable();
            $table->text('presentacion_campania'); 
            $table->integer('voluntarios_requeridos_campania')->comment="numero de voluntarios requeridos por la campania";
            $table->text('funciones_voluntarios_campania')->comment="funciones que realizaran los voluntarios";
            $table->integer('beneficiario_id')->unsigned()->index()->comment="id del usuario creador de la campania";
            $table->foreign('beneficiario_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('estado_campania_id')->unsigned()->index();
            $table->foreign('estado_campania_id')->references('id')->on('estado_campania')->onDelete('cascade');

            $table->integer('canton_id')->unsigned()->index()->comment="Canton donde se encuentra la campania";
            $table->foreign('canton_id')->references('id')->on('cantones')->onDelete('cascade');
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
        Schema::dropIfExists('campania_voluntariados');
    }
}
