<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    //con up se crea la tabla
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id(); //llave primaria
            $table->timestamps(); //registra el tiempo de creacion de la tabla
            $table->string('name');
            $table->string('descripcion');
            $table->integer('duracion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    //con down se destruye la tabla
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
