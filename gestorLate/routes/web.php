<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SingUpController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PedidoController;



// ROUTE FOR THE GESTOR LATE PAGE
Route::get('/', function () {
    return view('gestorLate');
})->name('gestorLate');




// LOGIN ROUTES
Route::get('/login',[LoginController::class, 'loginForm'])->name('login');
Route::post('login',[LoginController::class, 'login']);
//Route::post('/',[LoginController::class,'logout'])->name('logout');// ruta para cerrar la sesión que nos llevara a gestorLate

/// LOGOUT ROUTE
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// SIGNUP ROUTES
Route::get('/singUp', [SingUpController::class,'showForm'])->name('singUp');
Route::post('/singUp', [SingUpController::class,'registrer'])->name('singUp.post');


// COMMON ROUTES FOR BOTH ROLES (admin and empleado)
// Orders: index, show, create, store,edit,update
Route::middleware(['rol:admin,empleado'])->group(function () {
    Route::resource('pedidos', PedidoController::class)->only(['index', 'show', 'create', 'store', 'edit', 'update']);
    // Eliminar productos (disponible para ambos)
    Route::delete('/pedidos/{id}', [ProductoController::class, 'destroy'])->name('pedidos.destroy');
});

// EXCLUSIVE ROUTES FOR ADMIN
Route::middleware(['rol:admin'])->group(function () {
    // Dashboard / Home
    Route::get('/inicio', [InicioController::class, 'index'])->name('inicio');

     // Providers
    Route::get('/proveedores/agregar', [ProveedorController::class, 'create'])->name('agregarProveedor');
    Route::post('/proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
    Route::resource('proveedores', ProveedorController::class);
    Route::get('/proveedores/{id}/editar', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    Route::put('/proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');

    // Products
    Route::get('/productos/agregar', [ProductoController::class, 'create'])->name('productos.agregar');
    Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::resource('productos', ProductoController::class);
    Route::get('/productos/{producto}/editar', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');

    // Product deletion only for admin
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
});


    


