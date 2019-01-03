<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellidos');
            $table->string('nombres');
            $table->string('email')->unique();
            $table->string('avatar')->comment="imagen del usuario ";
            $table->string('direccion')->nullable()->comment="direccion de domicilio usuario";
            $table->string('informacio_personal')->nullable();
            $table->string('interes')->nullable()->comment="Proyectos de interes que desea ayudar el usuario";
            $table->string('habilidades')->nullable()->comment="habilidades del usuario";
            $table->string('password');
            $table->rememberToken();
            $table->unsignedInteger('role_id');
            $table->timestamps();
            
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
