<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatasMateriaSenibMinistradasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas_materia_senib_ministradas', function (Blueprint $table) {
            $table->increments('dmm_id');
            $table->date('dmm_inicio_materia')->comment('Data em que a matéria do senib começou a ser aplicada');
            $table->date('dmm_inicio_materia')->comment('Data em que a matéria do senib foi concluída')->nullable();
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
        Schema::dropIfExists('datas_materia_senib_ministradas');
    }
}
