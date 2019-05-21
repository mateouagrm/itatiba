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
            $table->string('fecha');
            $table->string('fase_obra');
            $table->string('estado');
            $table->double('costo_material');
            $table->double('costo_personal');
            $table->double('ganancia');
            $table->unsignedInteger('id_obra');
            $table->unsignedInteger('id_cliente');
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
