<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Producto extends Model
{
    use HasFactory, Notifiable;
    //
   /* public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'pedido_producto')
                ->withPivot('cantidad', 'precio_unitario', 'subtotal')
                ->withTimestamps(); 
    }*/
        public function lineasPedidos()
    {
        return $this->hasMany(LineaPedido::class);
    }


    public function proveedores(){
        return $this->belongsToMany(Proveedor::class, 'producto_proveedor')
                ->withPivot('precio_compra', 'plazo_entrega')
                ->withTimestamps();
    }

    

   protected $fillable = [
    'nombre',
    'descripcion',
    'categoria',
    'estado_producto',
    'unidad_medida',
    'stock',
    'precio_unitario',
    'atributos_adicionales',
];

}
