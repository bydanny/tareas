<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablaTareas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tareas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_tarea');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('prioridad');
            $table->unsignedBigInteger('categoria_id');//avmos a exibhir categoria
         //   $table->unsignedBigInteger('user_id')->nullable()->default(null);;
         //   $table->integer('categoria_id')-> unsigned();
            $table->string('estatus')->default('Por hacer');
            $table->boolean('terminada')->default(0);
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
        Schema::dropIfExists('tareas');
    }
}
