<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'prodXCategoria', 'prodXId');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::all();
        return view('home', compact('productos'));
    }

    public function prodXCategoria($categoria)
    {
        $productos = Producto::where('categoria', '=', $categoria)->get();
        return view('home', compact('productos'));
    }

    public function prodXId($categoria, $productoId)
    {
        $productos = Producto::all();
        $prodId = Producto::findOrFail($productoId);
        return view('productos.productoItem', compact(['productos', 'prodId']));
    }
}
