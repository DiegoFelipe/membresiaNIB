<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelMembroMinisteriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papel_membro_ministerios', function (Blueprint $table) {
            $table->increments('pmm_id');
            $table->string('pmm_nome')->comment('Se o membro foi participante, líder ou sub líder do ministério');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papel_membro_ministerios');
    }
}
