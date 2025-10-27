<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Proveedor;


class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $productos = Producto::all();
         $productos = Producto::with('proveedores')->get(); // <-- importante
        return view('productos.index', compact('productos'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $producto = new Producto();
        $proveedores = Proveedor::where('activo', true)->get(); // solo proveedores activos
        return view('productos.agregar', compact('proveedores'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string|max:100',
            'categoria' => 'required|string|max:100',
            'estado_producto' => 'required|string|max:100',
            'unidad_medida' => 'required|string|max:20',
            'stock' => 'required|integer|min:0',
            'precio_unitario' => 'required|numeric|min:0',
            //'atributos_adicionales' => 'required|string|max:100',
            'proveedor_id' => 'required|exists:proveedores,id',
        ]);

        $producto = Producto::create($request->except('proveedor_id'));

        // Relate product to supplier
        $producto->proveedores()->attach($request->proveedor_id);

        //Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
   public function edit(Producto $producto)
    {
         //$producto = Producto::findOrFail($id);
         $proveedores = Proveedor::where('activo', true)->get();
        return view('productos.editar', compact('producto', 'proveedores'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcion' => 'nullable|string|max:100',
            'categoria' => 'required|string|max:100',
            'estado_producto' => 'required|string|max:100',
            'unidad_medida' => 'required|string|max:20',
            'stock' => 'required|integer|min:0',
            'precio_unitario' => 'required|numeric|min:0',
            // 'atributos_adicionales' => 'required|string|max:100',
            'proveedor_id' => 'required|exists:proveedores,id',

        ]);

        $producto->update($request->all());
        $producto->update($request->except('proveedor_id'));

        // Synchronize single supplier
        $producto->proveedores()->sync([$request->proveedor_id]);
        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
        public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
