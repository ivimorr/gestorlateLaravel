<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

    class ProductoProveedorSeeder extends Seeder
    {
        public function run()
        {
            // Ejemplo de relaciones producto_proveedor
            $data = [
                // producto_id, proveedor_id, precio_compra, iva, unidad_medida, notas, plazo_entrega
                ['producto_id' => 1, 'proveedor_id' => 1, 'precio_compra' => 2.00, 'iva' => 21, 'unidad_medida' => 'unidad', 'notas' => 'Producto fresco', 'plazo_entrega' => 3],
                ['producto_id' => 2, 'proveedor_id' => 2, 'precio_compra' => 4.50, 'iva' => 21, 'unidad_medida' => 'ración', 'notas' => 'Jamón ibérico premium', 'plazo_entrega' => 5],
                ['producto_id' => 3, 'proveedor_id' => 3, 'precio_compra' => 3.20, 'iva' => 10, 'unidad_medida' => 'ración', 'notas' => 'Croquetas caseras', 'plazo_entrega' => 2],
                ['producto_id' => 4, 'proveedor_id' => 1, 'precio_compra' => 5.00, 'iva' => 21, 'unidad_medida' => 'ración', 'notas' => 'Pulpo gallego', 'plazo_entrega' => 4],
                ['producto_id' => 5, 'proveedor_id' => 4, 'precio_compra' => 2.50, 'iva' => 10, 'unidad_medida' => 'ración', 'notas' => 'Ensalada fresca', 'plazo_entrega' => 2],
                // Agrega más relaciones como prefieras (aquí solo ejemplos)
            ];

            foreach ($data as $item) {
                DB::table('producto_proveedor')->insert($item);
            }
        }
    }
?>