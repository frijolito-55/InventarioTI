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
        if(!Schema::hasTable('resguardo')){
            Schema::create('resguardo', function(Blueprint $table){
                $table->id('id_usuario');
                $table->integer('hotel_id');
                $table->integer('numeroColaborador');
                $table->string('usuarioNombre');
                $table->string('usuarioAprellidoPat');
                $table->string('usuarioAprellidoMat');
                $table->integer('departamento_iddepartamento');
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
