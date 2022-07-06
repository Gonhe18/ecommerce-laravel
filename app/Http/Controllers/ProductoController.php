<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function nuevoProducto()
    {
        return view('productos.newProducto');
    }
    // Cargo datos del formulario a DB
    public function store(Request $request)
    {
        $prod = new Producto();
        $prod->categoria = $request->input('categoria');
        $prod->marca = $request->input('marca');
        $prod->modelo = $request->input('modelo');
        $prod->stock = $request->input('stock');
        $prod->precio = $request->input('precio');
        $prod->img = $request->input('img');
        $prod->descripcion = $request->input('descripcion');
        $prod->save();
        return redirect()
            ->back()
            ->with('status', 'Producto creado correctamente');
    }
    public function edit($productoId)
    {
        $prodId = Producto::findOrFail($productoId);
        return view('productos.editProducto', compact('prodId'));
    }
    public function update(Request $request, $productoId)
    {
        $prodId = Producto::findOrFail($productoId);
        $prodId->categoria = $request->input('categoria');
        $prodId->marca = $request->input('marca');
        $prodId->modelo = $request->input('modelo');
        $prodId->stock = $request->input('stock');
        $prodId->precio = $request->input('precio');
        $prodId->img = $request->input('img');
        $prodId->descripcion = $request->input('descripcion');
        $prodId->save();
        return view('productos.productoItem', compact('prodId'));
    }

    public function delete($productoId)
    {
        $prodId = Producto::findOrFail($productoId);
        $prodId->delete();
        return view('admin.administrador', compact('prodId'));
    }
}
