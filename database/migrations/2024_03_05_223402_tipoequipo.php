<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(!Schema::hasTable('tipoequipo')){
            Schema::create('tipoequipo', function (Blueprint $table) {
                $table->id('idTipoEquipo')->comment('Llave primaria de tipo de equipo');
                $table->string('nombreTipoEquipo', 35)->comment('Nombre del tipo de equipo (mouse, computadora, etc)');
                $table->text('descripcion')->nullable()->comment('Descripción del tipo de equipo');
                $table->timestamps();
            });
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
