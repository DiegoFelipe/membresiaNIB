<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelMembroMateriaSenibsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papel_membro_materia_senibs', function (Blueprint $table) {
            $table->increments('pma_id');
            $table->string('pma_nome');
            $table->unsignedInteger('pma_datas_materia_senib_ministradas_id')

            $table->foreign('pma_datas_materia_senib_ministradas_id')->references('dmm_id')->on('datas_materia_senib_ministradas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papel_membro_materia_senibs');
    }
}
