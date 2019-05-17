<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembroMinisteriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membro_ministerios', function (Blueprint $table) {

            $table->date('mem_inicio')->comment('Data em que o membro entrou no ministério')->nullable();
            $table->date('mem_fim')->comment('Data em que o membro saiu no ministério')->nullable();
            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('ministerio_id');
            $table->unsignedInteger('papel_membro_ministerios_id');

            $table->foreign('membro_id')->references('mem_id')->on('membros');
            $table->foreign('ministerio_id')->references('min_id')->on('ministerios');
            $table->foreign('papel_membro_ministerios_id')->references('pmm_id')->on('papel_membro_ministerios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('membro_ministerios');
    }
}
