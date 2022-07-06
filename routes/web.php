<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;

Auth::routes();

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
// Categorias
Route::get('/productos/{categoria}', [HomeController::class, 'prodXCategoria'])->name('categoria');
// Productos ID
Route::get('/productos/{categoria}/{id}', [HomeController::class, 'prodXId'])->name('productoId');
//  Registro (crear usuario nuevo)
Route::get('/admin/registro', [AdminController::class, 'registroAdmin'])->name('registroAdmin');
Route::post('/admin/registro', [AdminController::class, 'store'])->name('registroAdmin');
// Solapa administrador
Route::get('/admin', [AdminController::class, 'administrador'])->name('admin');
// Nuevo producto
Route::get('/admin/crearproducto', [ProductoController::class, 'nuevoProducto'])->name('newProd');
Route::post('/admin/crearproducto', [ProductoController::class, 'store'])->name('newProd');
// Actualizar producto
Route::get('/admin/editproducto/{id}', [ProductoController::class, 'edit'])->name('editProd');
Route::patch('/admin/editproducto/{id}', [ProductoController::class, 'update'])->name('editProd');
// Eliminar producto
Route::delete('/admin/eliminarproducto/{id}', [ProductoController::class, 'delete'])->name('deleteProd');
// Actualizar datos Usuario
Route::get('/admin/editusuario/{id}', [AdminController::class, 'edit'])->name('editUsuario');
Route::patch('/admin/editusuario/{id}', [AdminController::class, 'update'])->name('editUsuario');
