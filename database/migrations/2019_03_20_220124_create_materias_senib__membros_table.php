<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasSenibMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_senib__membros', function (Blueprint $table) {

            $table->unsignedInteger('materias_senib_id');
            $table->unsignedInteger('membros_id');
            $table->unsignedInteger('papel_membro_materia_id');

            $table->foreign('materias_senib_id')->references('mts_id')->on('materias_senibs');
            $table->foreign('membros_id')->references('mem_id')->on('membros');
            $table->foreign('papel_membro_materia_id')->references('pma_id')->on('papel_membro_materia_senibs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias_senib__membros');
    }
}
