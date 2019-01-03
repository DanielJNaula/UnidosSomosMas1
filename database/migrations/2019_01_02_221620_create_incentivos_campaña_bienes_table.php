<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivosCampañaBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incentivos_campania_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo_contribucion');
            $table->string('descripcion_contribucion');
            $table->string('descripcion_incentivo');
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania perteneciente al incentivo";
            $table->foreign('campania_id')->references('id')->on('campania_bienes')->onDelete('cascade');
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
        Schema::dropIfExists('incentivos_campania_bienes');
    }
}
