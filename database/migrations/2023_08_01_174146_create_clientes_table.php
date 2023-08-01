<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('DNI', 9)->primary();
            $table->string('Nombre', 30);
            $table->string('Apellido1', 30);
            $table->string('Apellido2', 30);
            $table->enum('TipoCliente', ['REGISTRADO', 'SOCIO']);
            $table->float('CuotaMaximaPago')->unsigned()->nullable();
            $table->dateTime('FechaAlta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
