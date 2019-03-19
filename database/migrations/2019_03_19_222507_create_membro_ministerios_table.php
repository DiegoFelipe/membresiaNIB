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
            $table->unsignedInteger('membro_id');
            $table->unsignedInteger('ministerio_id');

            $table->foreign('membro_id')->references('mem_id')->on('membros');
            $table->foreign('ministerio_id')->references('min_id')->on('ministerios');
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
