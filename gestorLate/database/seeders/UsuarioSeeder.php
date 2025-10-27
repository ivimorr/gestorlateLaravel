<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        Usuario::create([
            'name' => 'Juan García',
            'email' => 'juan.admin@hostel.com',
            'password' => Hash::make('admin1234'),
            'rol' => 'admin',
            'telefono' => '612345678',
            'direccion' => 'Calle Mayor 1, Madrid',
            'tipo_de_negocio' => 'Restaurante',
            'informacion_adicional' => 'Propietario y gerente general.',
        ]);

        Usuario::create([
            'name' => 'Laura Fernández',
            'email' => 'laura.admin@hostel.com',
            'password' => Hash::make('admin1234'),
            'rol' => 'admin',
            'telefono' => '622345678',
            'direccion' => 'Avenida de Andalucía 12, Sevilla',
            'tipo_de_negocio' => 'Bar de tapas',
            'informacion_adicional' => 'Administradora regional.',
        ]);

        Usuario::create([
            'name' => 'Carlos Ruiz',
            'email' => 'carlos.empleado@hostel.com',
            'password' => Hash::make('empleado123'),
            'rol' => 'empleado',
            'telefono' => '632345678',
            'direccion' => 'Calle Valencia 22, Barcelona',
            'tipo_de_negocio' => 'Restaurante',
            'informacion_adicional' => 'Encargado de cocina.',
        ]);

        Usuario::create([
            'name' => 'Ana López',
            'email' => 'ana.empleado@hostel.com',
            'password' => Hash::make('empleado123'),
            'rol' => 'empleado',
            'telefono' => '642345678',
            'direccion' => 'Plaza Castilla 4, Madrid',
            'tipo_de_negocio' => 'Bar',
            'informacion_adicional' => 'Encargada de sala.',
        ]);
    }
}

?>