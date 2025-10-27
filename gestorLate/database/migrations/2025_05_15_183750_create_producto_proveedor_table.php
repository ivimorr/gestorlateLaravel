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
        Schema::create('producto_proveedor', function (Blueprint $table) {
            $table->id();

             $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('proveedor_id');

            // Campos adicionales opcionales
            $table->decimal('precio_compra', 8, 2)->nullable();   // Precio base sin IVA
            $table->decimal('iva', 8, 2)->nullable(); // IVA en porcentaje (ejemplo: 21.00 para 21%)
            $table->string('unidad_medida', 20)->nullable(); // Ejemplo: 'kg', 'litros', etc. (opcional)
            $table->text('notas')->nullable();              // Notas o condiciones especiales (opcional)

            $table->integer('plazo_entrega')->nullable(); // en días

            $table->timestamps();

             // Claves foráneas
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_proveedor');
    }
};
