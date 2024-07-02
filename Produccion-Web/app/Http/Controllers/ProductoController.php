<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ProductoController extends Controller
{
    // Lleva los productos a la ruta productos
    public function index()
    {
        $productos = DB::table('products')->select('id', 'nombre', 'descripcion', 'precio', 'Imagen')->paginate(6);
        return view('productos', ['productos' => $productos]);
    }

    // Función para el panel ABM
    public function abm()
    {
        $user = Session::get('user');
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->rol == 1) {
                $productos = DB::table('products')->select('id', 'nombre', 'descripcion', 'precio', 'Imagen')->paginate(6);
                return view('abm', ['productos' => $productos]);
            } else {
                return redirect()->route('inicio')->with('error', 'No tienes permiso para acceder al panel ABM de productos.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder al panel ABM de productos.');
        }
    }

    // Función para mostrar el formulario de creación
    public function create()
    {
        return view('productos.create');
    }

    // Función para almacenar un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('images'), $nombre_imagen);
        } else {
            $nombre_imagen = null;
        }

        Product::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'imagen' => $nombre_imagen,
        ]);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    // Función para mostrar el formulario de edición
    public function edit($id)
    {
        $producto = Product::findOrFail($id);
        return view('edit', $producto);
    }

    // Función para actualizar un producto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombre_imagen = time() . '.' . $imagen->getClientOriginalExtension();
            $imagen->move(public_path('images'), $nombre_imagen);
            $product->imagen = $nombre_imagen;
        }

        $product->nombre = $request->nombre;
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->save();

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    // Función para eliminar un producto
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
