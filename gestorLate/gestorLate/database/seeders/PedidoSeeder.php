<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;

    class PedidoSeeder extends Seeder
    {
        public function run(): void
        {
            for ($i = 1; $i <= 10; $i++) {
                Pedido::create([
                    'mesa' => 'Mesa ' . $i,
                    'subtotal' => 0, // Se actualizará después
                    'iva' => 0,
                    'total' => 0,
                    'estado' => 'finalizado',
                ]);
            }
        }
    }

?>