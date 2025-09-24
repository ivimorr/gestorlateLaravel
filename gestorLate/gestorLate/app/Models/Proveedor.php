<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Proveedor extends Model
{
    //
    use HasFactory, Notifiable;
    protected $table = 'proveedores'; //Importante: especificar el nombre real de la tabla
    public function productos(){
        return $this->belongsToMany(Producto::class, 'producto_proveedor')
                    ->withPivot('precio_compra', 'plazo_entrega')
                    ->withTimestamps();
    }

    protected $fillable = [
        'nombre',
        'tipo_proveedor',
        'estado',
        'cif',
        'telefono',
        'mail',
        'direccion',
        'persona_de_contacto',
        'condiciones_de_pago',
        'notas_adicionales',
        'activo',
    ];


}
