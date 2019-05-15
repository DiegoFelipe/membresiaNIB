<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('per_id');
            $table->string('per_codigo')->comment('Código da pergunta');
            $table->text('per_pergunta')->comment('Texto da Pergunta');
            $table->unsignedInteger('per_grupo_pergunta_id');

            $table->foreign('per_grupo_pergunta_id')->references('gpg_id')->on('grupo_perguntas')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
}
