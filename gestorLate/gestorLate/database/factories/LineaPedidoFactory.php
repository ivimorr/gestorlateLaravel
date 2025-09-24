<?php

namespace Database\Factories;
use App\Models\LineaPedido;
use App\Models\Producto;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LineaPedido>
 */
class LineaPedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = LineaPedido::class;

     public function definition(): array
    {
        $producto = Producto::inRandomOrder()->first() ?? Producto::factory()->create();
        $cantidad = $this->faker->numberBetween(1, 6);
        $precio = $producto->precio_unitario ?? $this->faker->randomFloat(2, 5, 100);
        $subtotal = $cantidad * $precio;

        return [
            'pedido_id' => Pedido::factory(), // o se pasa desde el `PedidoFactory`
            'producto_id' => $producto->id,
            'descripcion' => $this->faker->sentence(3), 
            'cantidad' => $cantidad,
            'precio_unitario' => $precio,
            'subtotal' => $subtotal,
        ];
    }
}
