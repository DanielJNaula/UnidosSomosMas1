<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariosCampañaVoluntariadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntarios_campania_voluntariados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('telefono_voluntario');
            $table->integer('telefono_referencia_voluntario');
            $table->boolean('incentivo_voluntariado')->comment="TRUE: donacion con incentivo FALSE:Donacion sin Incentivo";
            $table->integer('voluntario_id')->unsigned()->index()->comment="id del usuario voluntario";
            $table->foreign('voluntario_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania perteneciente al voluntariado";
            $table->foreign('campania_id')->references('id')->on('campania_voluntariados')->onDelete('cascade');
            $table->integer('incentivo_id')->unsigned()->index()->comment="id del incentivo perteneciente al voluntariado";
            $table->foreign('incentivo_id')->references('id')->on('incentivos_campania_voluntariados')->onDelete('cascade');
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
        Schema::dropIfExists('voluntarios_campania_voluntariados');
    }
}
