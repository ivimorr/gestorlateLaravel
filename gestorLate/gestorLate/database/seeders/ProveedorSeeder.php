<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proveedor;

class ProveedorSeeder extends Seeder
{
    public function run(): void
    {
        $proveedores = [
            ['nombre' => 'Makro España', 'tipo_proveedor' => 'Alimentos', 'estado' => 'activo', 'cif' => 'A12345678', 'telefono' => '911111111', 'mail' => 'contacto@makro.es', 'direccion' => 'Calle Comercial 1, Madrid', 'persona_de_contacto' => 'Luis Gómez', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Distribuciones Damm', 'tipo_proveedor' => 'Bebidas', 'estado' => 'activo', 'cif' => 'B87654321', 'telefono' => '922222222', 'mail' => 'ventas@damm.com', 'direccion' => 'Av. Cervezas 12, Barcelona', 'persona_de_contacto' => 'Marta Sanz', 'condiciones_de_pago' => '15 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Nestlé España', 'tipo_proveedor' => 'Postres', 'estado' => 'activo', 'cif' => 'C11223344', 'telefono' => '933333333', 'mail' => 'info@nestle.es', 'direccion' => 'Paseo de Gracia, Barcelona', 'persona_de_contacto' => 'Jorge Nadal', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Coca-Cola European Partners', 'tipo_proveedor' => 'Bebidas', 'estado' => 'activo', 'cif' => 'D44332211', 'telefono' => '944444444', 'mail' => 'info@cocacola.com', 'direccion' => 'Calle Refresco 8, Madrid', 'persona_de_contacto' => 'Ana Torres', 'condiciones_de_pago' => 'Contado', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'La Sirena', 'tipo_proveedor' => 'Congelados', 'estado' => 'activo', 'cif' => 'E55667788', 'telefono' => '955555555', 'mail' => 'clientes@lasirena.es', 'direccion' => 'Pol. Ind. Congelados, Barcelona', 'persona_de_contacto' => 'Paco Moreno', 'condiciones_de_pago' => '45 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Calidad Pascual', 'tipo_proveedor' => 'Lácteos', 'estado' => 'activo', 'cif' => 'F99887766', 'telefono' => '966666666', 'mail' => 'ventas@pascual.es', 'direccion' => 'Calle Leche 5, Burgos', 'persona_de_contacto' => 'Isabel Lobo', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Borges', 'tipo_proveedor' => 'Aceites', 'estado' => 'activo', 'cif' => 'G12349876', 'telefono' => '977777777', 'mail' => 'info@borges.es', 'direccion' => 'Av. Mediterráneo 33, Tarragona', 'persona_de_contacto' => 'María Soler', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Gallina Blanca', 'tipo_proveedor' => 'Salsas y Caldos', 'estado' => 'activo', 'cif' => 'H87651234', 'telefono' => '988888888', 'mail' => 'contacto@gallinablanca.es', 'direccion' => 'Calle Sopa 1, Zaragoza', 'persona_de_contacto' => 'Pedro Casas', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Freixenet', 'tipo_proveedor' => 'Vinos y Cavas', 'estado' => 'activo', 'cif' => 'I11224455', 'telefono' => '999999999', 'mail' => 'ventas@freixenet.com', 'direccion' => 'Sant Sadurní d’Anoia, Barcelona', 'persona_de_contacto' => 'Clara Puig', 'condiciones_de_pago' => '60 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Heineken España', 'tipo_proveedor' => 'Bebidas', 'estado' => 'activo', 'cif' => 'J33445566', 'telefono' => '910101010', 'mail' => 'contacto@heineken.es', 'direccion' => 'Calle Cerveza 22, Sevilla', 'persona_de_contacto' => 'Rubén Vidal', 'condiciones_de_pago' => 'Contado', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Unilever', 'tipo_proveedor' => 'Multiproducto', 'estado' => 'activo', 'cif' => 'U11111111', 'telefono' => '911111112', 'mail' => 'info@unilever.com', 'direccion' => 'Rotterdam, Países Bajos', 'persona_de_contacto' => 'Helen K.', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Danone', 'tipo_proveedor' => 'Lácteos', 'estado' => 'activo', 'cif' => 'D11111111', 'telefono' => '912345678', 'mail' => 'info@danone.com', 'direccion' => 'París, Francia', 'persona_de_contacto' => 'Luc Moreau', 'condiciones_de_pago' => '30 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'Nestlé Global', 'tipo_proveedor' => 'Postres', 'estado' => 'activo', 'cif' => 'N11111111', 'telefono' => '913456789', 'mail' => 'global@nestle.com', 'direccion' => 'Vevey, Suiza', 'persona_de_contacto' => 'Pierre Dubois', 'condiciones_de_pago' => '45 días', 'notas_adicionales' => '', 'activo' => true],
            ['nombre' => 'PepsiCo', 'tipo_proveedor' => 'Bebidas y Snacks', 'estado' => 'activo', 'cif' => 'P11111111', 'telefono' => '914567890', 'mail' => 'info@pepsico.com', 'direccion' => 'Nueva York, EE.UU.', 'persona_de_contacto' => 'Janet Wells', 'condiciones_de_pago' => '60 días', 'notas_adicionales' => '', 'activo' => true],
        ];

        foreach ($proveedores as $proveedor) {
            Proveedor::create($proveedor);
        }
    }
}


?>