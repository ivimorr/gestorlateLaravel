<?php

namespace Database\Factories;
use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Proveedor::class;
    public function definition(): array
    {
        return [
            //
             'nombre' => $this->faker->company,
            'tipo_proveedor' => $this->faker->randomElement(['Alimentos', 'Bebidas', 'Limpieza']),
            'estado' => $this->faker->randomElement(['activo', 'inactivo']),
            'cif' => $this->faker->unique()->bothify('?-########'),
            'telefono' => $this->faker->phoneNumber,
            'mail' => $this->faker->unique()->safeEmail,
            'direccion' => $this->faker->address,
            'persona_de_contacto' => $this->faker->name,
            'condiciones_de_pago' => $this->faker->randomElement(['Contado', '30 días', '60 días']),
            'notas_adicionales' => $this->faker->sentence,
            'activo' => $this->faker->boolean(80),

        ];
    }
}
