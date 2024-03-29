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
        if (!Schema::hasTable("responsable")) {
            Schema::create('responsable', function (Blueprint $table) {
                $table->id('id_responsable');
                $table->string('usuario');
                $table->string('nombre');
                $table->string('password');
                $table->integer('tipo');
                $table->string('departamento');
                $table->integer('acceso')->nullable();
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
