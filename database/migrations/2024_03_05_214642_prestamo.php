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
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        if(!Schema::hasTable('prestamos')){
            Schema::create('prestamos', function (Blueprint $table) {
                $table->increments('id')->comment('Llave primaria de la tabla de préstamos');
                $table->integer('idColaboradorEmpleado')->comment('Llave foránea del colaborador que recibe el préstamo');
                $table->integer('estatus_idEstatus')->nullable()->comment('Estado del préstamo');
                $table->date('fecha_devolucion')->comment('Fecha en que se tiene que devolver el préstamo');
                $table->date('fecha_prestamo')->comment('Fecha en la que se realiza el préstamo');
                $table->integer('proroga')->default(0)->comment('Proroga a la entrega del prestamo');
                $table->text('descripcion')->nullable()->comment('Descripción del motivo por el cual se realiza el préstamo');
                $table->integer('capturaUser')->comment('Llave foránea del usuario que hace el préstamo');
                $table->string('nombreEquipo', 35)->comment('Nombre del equipo en préstamo');
                $table->integer('Plataforma_idPlataforma')->nullable();
                $table->timestamps();
    
                $table->foreign('capturaUser')->references('id_responsable')->on('responsable')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('estatus_idEstatus')->references('idEstatus')->on('estatus')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('Plataforma_idPlataforma')->references('idPlataforma')->on('plataforma')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idColaboradorEmpleado')->references('id_usuario')->on('colaborador')->onDelete('NO ACTION')->onUpdate('NO ACTION');
            });
        }
    }
};
