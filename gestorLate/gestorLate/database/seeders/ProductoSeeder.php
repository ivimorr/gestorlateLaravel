<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    public function run(): void
    {
        $productos = [
            
            ['nombre' => 'Tortilla española', 'descripcion' => 'Tortilla con patatas y cebolla', 'categoria' => 'Comidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'unidad', 'stock' => 50, 'precio_unitario' => 3.50],
            ['nombre' => 'Jamón ibérico', 'descripcion' => 'Jamón curado de bellota', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 30, 'precio_unitario' => 6.00],
            ['nombre' => 'Croquetas caseras', 'descripcion' => 'Croquetas de jamón y pollo', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 40, 'precio_unitario' => 4.00],
            ['nombre' => 'Pulpo a la gallega', 'descripcion' => 'Pulpo con pimentón y patatas', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 20, 'precio_unitario' => 7.00],
            ['nombre' => 'Ensalada mixta', 'descripcion' => 'Lechuga, tomate, cebolla y atún', 'categoria' => 'Comidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 30, 'precio_unitario' => 5.00],
            ['nombre' => 'Paella valenciana', 'descripcion' => 'Arroz con pollo, conejo y verdura', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 25, 'precio_unitario' => 10.00],
            ['nombre' => 'Bacalao al pil pil', 'descripcion' => 'Bacalao con aceite, ajo y guindilla', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 15, 'precio_unitario' => 11.00],
            ['nombre' => 'Entrecot de ternera', 'descripcion' => 'Entrecot a la plancha con patatas', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'unidad', 'stock' => 20, 'precio_unitario' => 14.00],
            ['nombre' => 'Tarta de queso', 'descripcion' => 'Postre casero de queso', 'categoria' => 'Postres', 'estado_producto' => 'Disponible', 'unidad_medida' => 'porción', 'stock' => 30, 'precio_unitario' => 4.50],
            ['nombre' => 'Café solo', 'descripcion' => 'Café espresso', 'categoria' => 'Cafés e infusiones', 'estado_producto' => 'Disponible', 'unidad_medida' => 'taza', 'stock' => 100, 'precio_unitario' => 1.50],
            ['nombre' => 'Gazpacho Andaluz', 'descripcion' => 'Sopa fría de tomate y verduras', 'categoria' => 'Comidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'vaso', 'stock' => 40, 'precio_unitario' => 3.50],
            ['nombre' => 'Calamares a la romana', 'descripcion' => 'Calamares rebozados y fritos', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 35, 'precio_unitario' => 5.00],
            ['nombre' => 'Patatas bravas', 'descripcion' => 'Patatas fritas con salsa picante', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 50, 'precio_unitario' => 3.00],
            ['nombre' => 'Pimientos de padrón', 'descripcion' => 'Pimientos fritos con sal gruesa', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 30, 'precio_unitario' => 4.00],
            ['nombre' => 'Pulgas de jamón', 'descripcion' => 'Pequeños bocados de pan con jamón', 'categoria' => 'Desayunos', 'estado_producto' => 'Disponible', 'unidad_medida' => 'unidad', 'stock' => 45, 'precio_unitario' => 1.50],
            ['nombre' => 'Fabada asturiana', 'descripcion' => 'Guiso de fabes con chorizo y morcilla', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 20, 'precio_unitario' => 9.50],
            ['nombre' => 'Cocido madrileño', 'descripcion' => 'Guiso tradicional con garbanzos y carne', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 18, 'precio_unitario' => 11.00],
            ['nombre' => 'Carrillera de cerdo', 'descripcion' => 'Carrilleras estofadas con vino tinto', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 15, 'precio_unitario' => 13.00],
            ['nombre' => 'Bocadillo de calamares', 'descripcion' => 'Bocadillo con calamares fritos', 'categoria' => 'Comidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'unidad', 'stock' => 40, 'precio_unitario' => 4.50],
            ['nombre' => 'Flan casero', 'descripcion' => 'Postre tradicional de huevo y caramelo', 'categoria' => 'Postres', 'estado_producto' => 'Disponible', 'unidad_medida' => 'porción', 'stock' => 30, 'precio_unitario' => 3.50],
            ['nombre' => 'Natillas', 'descripcion' => 'Postre de crema con canela', 'categoria' => 'Postres', 'estado_producto' => 'Disponible', 'unidad_medida' => 'porción', 'stock' => 30, 'precio_unitario' => 3.50],
            ['nombre' => 'Churros con chocolate', 'descripcion' => 'Churros fritos con chocolate caliente', 'categoria' => 'Desayunos', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 25, 'precio_unitario' => 4.00],
            ['nombre' => 'Sangría', 'descripcion' => 'Bebida de vino con frutas', 'categoria' => 'Bebidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'jarra', 'stock' => 60, 'precio_unitario' => 7.00],
            ['nombre' => 'Cerveza', 'descripcion' => 'Cerveza nacional o importada', 'categoria' => 'Bebidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'botella', 'stock' => 150, 'precio_unitario' => 2.00],
            ['nombre' => 'Vino tinto Rioja', 'descripcion' => 'Botella de vino tinto de Rioja', 'categoria' => 'Bebidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'botella', 'stock' => 50, 'precio_unitario' => 12.00],
            ['nombre' => 'Agua mineral', 'descripcion' => 'Botella de agua mineral', 'categoria' => 'Bebidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'botella', 'stock' => 100, 'precio_unitario' => 1.00],
            ['nombre' => 'Ensaladilla rusa', 'descripcion' => 'Ensalada de patata, mayonesa y atún', 'categoria' => 'Comidas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 30, 'precio_unitario' => 4.50],
            ['nombre' => 'Boquerones en vinagre', 'descripcion' => 'Boquerones marinados en vinagre', 'categoria' => 'Tapas', 'estado_producto' => 'Disponible', 'unidad_medida' => 'ración', 'stock' => 25, 'precio_unitario' => 5.50],
            ['nombre' => 'Solomillo de cerdo', 'descripcion' => 'Solomillo a la plancha con salsa', 'categoria' => 'Platos principales', 'estado_producto' => 'Disponible', 'unidad_medida' => 'unidad', 'stock' => 18, 'precio_unitario' => 13.50],
            ['nombre' => 'Helado artesanal', 'descripcion' => 'Helado hecho en casa con sabores variados', 'categoria' => 'Postres', 'estado_producto' => 'Disponible', 'unidad_medida' => 'bola', 'stock' => 40, 'precio_unitario' => 2.50],

        ];

        foreach ($productos as $producto) {
            Producto::create(array_merge($producto, ['atributos_adicionales' => null]));
        }
    }
}
