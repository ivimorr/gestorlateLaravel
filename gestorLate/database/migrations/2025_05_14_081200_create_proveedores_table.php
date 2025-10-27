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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('tipo_proveedor', 50);// bebida, comida, productos de limpieza 
            $table->string('estado', 50);
            $table->string('cif', 50)->unique();
            $table->string('telefono', 50)->nullable();
            $table->string('mail', 50);
            $table->string('direccion', 500)->nullable(); // corregido nombre y añadido nullable
            $table->string('persona_de_contacto', 100);
            $table->string('condiciones_de_pago', 100);
            $table->string('notas_adicionales', 500)->nullable(); // corregido y añadido nullable
            $table->boolean('activo')->default(true);
            $table->timestamps();
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
