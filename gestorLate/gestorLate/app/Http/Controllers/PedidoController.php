<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\LineaPedido;
use App\Models\Producto;

class PedidoController extends Controller{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pedidos = Pedido::with('lineasPedidos')->latest()->get();
        return view('pedidos.index', compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = Producto::all(); // o con filtros si es necesario
        return view('pedidos.agregar', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        $request->validate([
            'mesa' => 'required|string|max:255',
            'pedido_json' => 'required|json'
        ]);

        $data = json_decode($request->pedido_json, true);

        if (!$data || empty($data)) {
            return back()->with('error', 'No se ha seleccionado ningún producto.');
        }

        // Check available stock
        foreach ($data as $linea) {
            $producto = Producto::find($linea['producto_id']);
            if (!$producto || $producto->stock < $linea['cantidad']) {
                return back()->with('error', 'No hay suficiente stock para el producto: ' . ($producto->nombre ?? 'Desconocido'));
            }
        }

        //Calculate totals
        $subtotal = array_sum(array_map(fn($l) => $l['cantidad'] * $l['precio_unitario'], $data));
        $iva = $subtotal * 0.21;
        $total = $subtotal + $iva;

        // Create order
        $pedido = Pedido::create([
            'mesa' => $request->mesa,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
            'estado' => 'Pendiente',
        ]);

        // Create lines and update stock
        foreach ($data as $linea) {
            LineaPedido::create([
                'pedido_id' => $pedido->id,
                'producto_id' => $linea['producto_id'],
                'cantidad' => $linea['cantidad'],
                'precio_unitario' => $linea['precio_unitario'],
                'subtotal' => $linea['subtotal'],
            ]);

            $producto = Producto::find($linea['producto_id']);
            $producto->stock -= $linea['cantidad'];
            $producto->save();
        }

        return redirect()->route('pedidos.index')->with('success', 'Pedido creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        // Carga las relaciones si no se usan automáticamente
        $pedido->load('lineasPedidos.producto');

        return view('pedidos.show', compact('pedido'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $pedido = Pedido::with('lineasPedidos')->findOrFail($id);
        $productos = Producto::all();

        return view('pedidos.edit', compact('pedido', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     */


   public function update(Request $request, $id)
    {
        $request->validate([
            'mesa' => 'required|string|max:255',
            'pedido_json' => 'required|json',
        ]);

        $pedido = Pedido::findOrFail($id);
        $nuevasLineas = json_decode($request->pedido_json, true);

        if (!$nuevasLineas || empty($nuevasLineas)) {
            return back()->with('error', 'No se ha seleccionado ningún producto.');
        }

        //Replenish stock of previous lines
        foreach ($pedido->lineasPedidos as $oldLinea) {
            $producto = Producto::find($oldLinea->producto_id);
            if ($producto) {
                $producto->stock += $oldLinea->cantidad;
                $producto->save();
            }
        }

        // Validate stock with new quantities
        foreach ($nuevasLineas as $linea) {
            $producto = Producto::find($linea['producto_id']);
            if (!$producto || $producto->stock < $linea['cantidad']) {
                return back()->with('error', 'No hay suficiente stock para el producto: ' . ($producto->nombre ?? 'Desconocido'));
            }
        }

        // Calculate new subtotal, VAT, total
        $subtotal = array_sum(array_map(fn($l) => $l['cantidad'] * $l['precio_unitario'], $nuevasLineas));
        $iva = $subtotal * 0.21;
        $total = $subtotal + $iva;

        // Update order
        $pedido->update([
            'mesa' => $request->mesa,
            'subtotal' => $subtotal,
            'iva' => $iva,
            'total' => $total,
        ]);

        // Delete previous lines
        $pedido->lineasPedidos()->delete();

        //Create new lines and update stock
        foreach ($nuevasLineas as $linea) {
            $pedido->lineasPedidos()->create([
                'producto_id' => $linea['producto_id'],
                'cantidad' => $linea['cantidad'],
                'precio_unitario' => $linea['precio_unitario'],
                'subtotal' => $linea['subtotal'],
            ]);

            $producto = Producto::find($linea['producto_id']);
            $producto->stock -= $linea['cantidad'];
            $producto->save();
        }

        return redirect()->route('pedidos.show', $pedido->id)
            ->with('success', 'Pedido actualizado correctamente.');
    }


    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pedido = Pedido::findOrFail($id);
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado correctamente.');
    }
}
