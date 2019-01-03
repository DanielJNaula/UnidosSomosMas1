<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonacionesCampañaBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donaciones_campania_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_donacion');
            $table->text('descripcion_donacion');
            $table->text('descripcion_retiro_donacion');
            $table->integer('telefono_donador');
            $table->string('direccion_retiro_donacion');
            $table->string('latitud_donacion');
            $table->string('longitud_donacion');
            $table->boolean('incentivo_donacion')->comment="TRUE: donacion con incentivo FALSE:Donacion sin Incentivo";
            $table->integer('donador_id')->unsigned()->index()->comment="id del usuario donador";
            $table->foreign('donador_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania perteneciente a la donacion";
            $table->foreign('campania_id')->references('id')->on('campania_bienes')->onDelete('cascade');
            $table->integer('incentivo_id')->unsigned()->index()->comment="id del incentivo perteneciente a la donacion";
            $table->foreign('incentivo_id')->references('id')->on('incentivos_campania_bienes')->onDelete('cascade');
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
        Schema::dropIfExists('donaciones_campania_bienes');
    }
}
