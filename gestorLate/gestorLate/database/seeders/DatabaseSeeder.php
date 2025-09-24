<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Pedido;
use App\Models\Proveedor;
use App\Models\Usuario;
use App\Models\Producto;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        

        Usuario::factory()->create([
            'name' => 'Diego',
            'email' => 'admin@example.com',
            'rol' => 'admin',
            'password' => Hash::make('12345678'), // o 'password'
        ]);

        $this->call([
            UsuarioSeeder::class,
            ProveedorSeeder::class,
            ProductoSeeder::class,
            ProductoProveedorSeeder::class, 
            PedidoSeeder::class,
            LineaPedidoSeeder::class,
        ]);

        // Proveedor::factory(1)->create();
        // Producto::factory(50)->create();
        // Usuario::factory(50)->create();
        // Pedido::factory(50)->create(); // Esto crea líneas y productos en el pivote también


    }
    
}
