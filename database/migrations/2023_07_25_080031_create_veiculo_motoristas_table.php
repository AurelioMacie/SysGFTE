<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeiculoMotoristasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('veiculo_motoristas', function (Blueprint $table) {
            $table->id();
            $table->string('estado');
            $table->unsignedInteger('veiculo_id');
            $table->unsignedInteger('motorista_id');
            $table->foreign('veiculo_id')->references('id')->on('veiculos');
            $table->foreign('motorista_id')->references('id')->on('motoristas');
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
        Schema::dropIfExists('veiculo_motoristas');
    }
}
