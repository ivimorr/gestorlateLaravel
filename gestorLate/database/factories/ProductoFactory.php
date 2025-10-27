<?php

namespace Database\Factories;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Producto::class;
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(5),
            'categoria' => $this->faker->randomElement(['Bebidas', 'Comidas', 'Postres', 'Platos principales','Tapas', 'Cafés e infusiones', 'Desayunos','Menú del día']),
            'estado_producto' => $this->faker->randomElement(['Disponible', 'Agotado', 'En espera']),
            'unidad_medida' => $this->faker->randomElement(['kg', 'g', 'l', 'ml', 'unidad']),
            'stock' => $this->faker->numberBetween(0, 100),
            'precio_unitario' => $this->faker->randomFloat(2, 1, 500),
            'atributos_adicionales' => $this->faker->words(3, true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Producto $producto) {
            Proveedor::factory(1)->create()->each(function ($proveedor) use ($producto) {
                // Creamos un proveedor aleatorio
                $proveedor = Proveedor::factory()->create();
                $producto->proveedores()->attach($proveedor->id, [
                    'precio_compra' => $this->faker->randomFloat(2, 10, 100),
                    'iva' => 21.00,
                    'unidad_medida' => 'kg',
                    'notas' => 'Entrega semanal',
                    'plazo_entrega' => $this->faker->numberBetween(1, 14),
                ]);
            });
        });
    }
}
