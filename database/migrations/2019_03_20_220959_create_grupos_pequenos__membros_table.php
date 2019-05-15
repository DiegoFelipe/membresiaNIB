<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposPequenosMembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_pequenos__membros', function (Blueprint $table) {
            $table->unsignedInteger('gpm_grupos_pequenos_id');
            $table->unsignedInteger('gpm_membros_id');
            $table->unsignedInteger('gpm_papel_membro_grupo_id');

            $table->foreign('gpm_grupos_pequenos_id')->references('gpp_id')->on('grupos_pequenos');
            $table->foreign('gpm_membros_id')->references('mem_id')->on('membros');
            $table->foreign('gpm_papel_membro_grupo_id')->references('pmg_id')->on('papel_membro_grupo_pequenos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_pequenos__membros');
    }
}
