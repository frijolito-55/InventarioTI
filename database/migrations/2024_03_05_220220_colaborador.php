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
        if(!Schema::hasTable('colaborador')){
            Schema::create('colaborador', function (Blueprint $table) {
                $table->id('id_usuario')->comment('Llave primaria de la tabla colaborador');
                $table->integer('hotel_id')->comment('Llave foránea de hotel');
                $table->string('numeroColaborador', 45)->comment('Número del colaborador');
                $table->string('usuarioNombre', 80)->nullable()->comment('Nombre del usuario');
                $table->string('usuarioApellidoPat', 60)->nullable()->comment('Apellido paterno del usuario');
                $table->string('usuarioApellidoMat', 60)->nullable()->comment('Apellido materno del usuario');
                $table->integer('departamento_iddepartamento')->comment('Llave foránea del departamento');
                $table->timestamps();
    
                $table->index('hotel_id', 'fk_colaborador_hotel1_idx');
                $table->index('departamento_iddepartamento', 'fk_colaborador_departamento1_idx');
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
