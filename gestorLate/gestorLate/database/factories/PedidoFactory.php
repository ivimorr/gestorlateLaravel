<?php

namespace Database\Factories;
use App\Models\Pedido;
use App\Models\LineaPedido;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Pedido::class;
     
    public function definition(): array{
        $subtotal = $this->faker->randomFloat(2, 10, 200);
        $iva = $subtotal * 0.21;
        $total = $subtotal + $iva;

        return [
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
            'estado' => $this->faker->randomElement(['pendiente', 'enviado', 'entregado']),
            'mesa' => 'Mesa ' . $this->faker->numberBetween(1, 20),
        ];
    }

    public function configure(){
        return $this->afterCreating(function (Pedido $pedido) {
            // Obtener productos existentes o crear nuevos si no hay suficientes
            $productos = Producto::inRandomOrder()->take(3)->get();

            if ($productos->count() < 3) {
                $productos = Producto::factory(3)->create();
            }

            foreach ($productos as $producto) {
                $cantidad = rand(1, 5);
                $precio = $producto->precio_unitario ?? fake()->randomFloat(2, 5, 100);

                LineaPedido::create([
                    'pedido_id' => $pedido->id,
                    'producto_id' => $producto->id,
                    'cantidad' => $cantidad,
                    'precio_unitario' => $precio,
                    'subtotal' => $cantidad * $precio,
                ]);
            }
        });
    }

}
