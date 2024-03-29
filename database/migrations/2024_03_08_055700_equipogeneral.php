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
        if(!Schema::hasTable('equipogeneral')){
            Schema::create('equipogeneral', function(Blueprint $table){
                $table->id();
                $table->integer('idModelo');
                $table->integer('idProveedores');
                $table->integer('idEstatus');
                $table->integer('idTipoEquipo');
                $table->integer('idHotel');
                $table->integer('idMarca');
                $table->integer('idTamano');
                $table->integer('idSistemaOperativo');
                $table->string('numeroSerie');
                $table->date('fechaCompra');
                $table->string('factura');
                $table->timestamp('fechaIngreso');
                $table->string('memoria');
                $table->string('nonbrePC');
                $table->integer('capturaColaboradorId');
                $table->integer('idHotelCambio');
                $table->integer('resguardo_idresguardo');
                $table->integer('idPrestamos');
                /*$table->foreign('idModelo')->references('modelo')->on('idModelo')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('capturaColaboradorId')->references('responsable')->on('id_responsable')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idHotelCambio')->references('hotel')->on('id')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idPrestamo')->references('prestamos')->on('id')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('resguardo_idresguardo')->references('resguardo')->on('id_resguardo')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idSitemaOperativo')->references('sistemaoperativo')->on('idSitemaOperativo')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idEstatus')->references('estatus')->on('idEstatus')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idProveedores')->references('proveedores')->on('idProveedores')->onDelete('NO ACTION')->onUpdate('NO ACTION');
                $table->foreign('idTipoEquipo')->references('tipoequipo')->on('idTipoEquipo')->onDelete('NO ACTION')->onUpdate('NO ACTION');*/
                
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
