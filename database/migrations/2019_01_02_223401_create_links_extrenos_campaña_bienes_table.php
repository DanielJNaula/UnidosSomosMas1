<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksExtrenosCampañaBienesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links_extrenos_campania_bienes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre_link');
            $table->string('url_link');
            $table->integer('campania_id')->unsigned()->index()->comment="id de la campania perteneciente al link";
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
        Schema::dropIfExists('links_extrenos_campania_bienes');
    }
}
