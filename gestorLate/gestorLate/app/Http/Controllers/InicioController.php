<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Models\Producto;
use App\Models\Pedido;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    //
    /*public function showInicio(){
        return view('inicio');
        
    }*/

    public function index()
    {
        // KPIs
        $totalProveedores = Proveedor::count();
        $totalProductos = Producto::count();
        $totalPedidosMes = Pedido::whereMonth('created_at', now()->month)
                                 ->whereYear('created_at', now()->year)
                                 ->count();

          // Last invoices (each order = one invoice) we must try to be from the current day
        $ultimasFacturas = Pedido::withCount('lineasPedidos') // counts the products in the order
                                ->orderBy('created_at', 'desc')
                                ->take(10)
                                ->get();

        return view('inicio', compact(
            'totalProveedores',
            'totalProductos',
            'totalPedidosMes',
            'ultimasFacturas'
        ));
    }

}
