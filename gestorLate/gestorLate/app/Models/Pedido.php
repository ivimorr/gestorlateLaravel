<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $fillable = [
        'mesa', // ← AÑADIDO
        'subtotal',
        'iva',
        'total',
        'estado', // si lo usas
    ];
    // Un pedido tiene varias lineas de pedido
    public function lineasPedidos(){

        return $this->hasMany(LineaPedido::class);
    }

    /*public function productos(){
        
        return $this->belongsToMany(Producto::class, 'pedido_producto')
                    ->withPivot('cantidad', 'precio_unitario', 'subtotal')
                    ->withTimestamps();
    }*/

    public function productos()
{
    return $this->hasManyThrough(Producto::class, LineaPedido::class, 'pedido_id', 'id', 'id', 'producto_id');
}



}
