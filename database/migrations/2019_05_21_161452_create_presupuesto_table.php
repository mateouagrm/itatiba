<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresupuestoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presupuesto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fecha')->nullable();
            $table->string('fase_obra')->nullable();
            $table->string('estado')->nullable();
            $table->double('costo_material')->nullable();
            $table->double('ganancia')->nullable();
            $table->unsignedInteger('id_obra')->nullable();
            $table->unsignedInteger('id_cliente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presupuesto');
    }
}
