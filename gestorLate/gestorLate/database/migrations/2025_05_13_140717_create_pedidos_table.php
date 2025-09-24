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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->decimal('subtotal', 8, 2)->nullable();
            $table->decimal('iva', 8, 2)->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->string('estado',100)->nullable();
            $table->string('mesa',100)->nullable();
            $table->timestamps(); // Me da la fecha y ora de ultimas actualizaciones y de creación.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
