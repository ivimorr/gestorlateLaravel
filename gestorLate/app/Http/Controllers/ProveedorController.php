<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $proveedores = Proveedor::orderBy('nombre')->get();
        return view('proveedores.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('proveedores.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        // Data validation
        $validated = $request->validate([
            'nombre' => 'required|string|max:100',
            'tipo_proveedor' => 'required|string|max:50',
            'estado' => 'required|string|max:50',
            'cif' => 'required|string|max:50|unique:proveedores,cif',
            'telefono' => 'nullable|string|max:50',
            'mail' => 'required|email|max:50',
            'direccion' => 'nullable|string|max:500',
            'persona_de_contacto' => 'required|string|max:100',
            'condiciones_de_pago' => 'required|string|max:100',
            'notas_adicionales' => 'nullable|string|max:500',
            'activo' => 'boolean',
        ]);

       // Store in DB
        $validated['activo'] = $request->has('activo'); // checkbox true/false
        $proveedor = Proveedor::create($validated);

        // Save supplier relationships
        $proveedor->productos()->sync($request->input('productos', []));

        // Redirect with message
        return redirect()->route('agregarProveedor')->with('success', 'Proveedor creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        //
        $proveedor = Proveedor::findOrFail($id);
        return view('proveedores.editar', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'tipo_proveedor' => 'required|string|max:50',
            'estado' => 'required|string|max:50',
            'cif' => 'required|string|max:50|unique:proveedores,cif,' . $id,
            'telefono' => 'nullable|string|max:50',
            'mail' => 'required|email|max:50',
            'direccion' => 'nullable|string|max:500',
            // 'persona_de_contacto' => 'required|string|max:100',
            'condiciones_de_pago' => 'required|string|max:100',
            'notas_adicionales' => 'nullable|string|max:500',
            'activo' => 'boolean',
        ]);

        $proveedor = Proveedor::findOrFail($id);
        $datos = $request->all();
        $datos['activo'] = $request->has('activo');

        $proveedor->update($datos);

        return redirect()->route('proveedores.index')->with('success', 'Proveedor actualizado correctamente.');
    }


    /**
     * Remove the specified resource from storage.
     */ 
    public function destroy(string $id){
        $proveedor = Proveedor::findOrFail($id);
        $proveedor->delete();

        return redirect()->route('proveedores.index')->with('success', 'Proveedor eliminado correctamente.');
    }
    
}
