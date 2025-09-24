<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\LineaPedido;

class LineaPedidoSeeder extends Seeder
{
    public function run(): void
    {
        $pedidos = Pedido::all();
        $productos = Producto::all();

        foreach ($pedidos as $pedido) {
            $lineas = [];
            $subtotalPedido = 0;

            // Cada pedido tendrá entre 2 y 4 productos distintos
            $productosUsados = $productos->random(rand(2, 4));

            foreach ($productosUsados as $producto) {
                $cantidad = rand(1, 3);
                $precio = $producto->precio_unitario;
                $subtotal = $cantidad * $precio;

                $linea = LineaPedido::create([
                    'pedido_id' => $pedido->id,
                    'producto_id' => $producto->id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $precio,
                    'subtotal' => $subtotal,
                    'descripcion' => $producto->nombre
                ]);

                $subtotalPedido += $subtotal;
                $lineas[] = $linea;
            }

            $iva = $subtotalPedido * 0.10;
            $total = $subtotalPedido + $iva;

            $pedido->update([
                'subtotal' => $subtotalPedido,
                'iva' => $iva,
                'total' => $total,
            ]);
        }
    }
}
