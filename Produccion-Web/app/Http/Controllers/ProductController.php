<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // Mostrar una lista de todos los productos
    public function index()
    {
        $products = Product::all();
        return view('product', compact('products'));
    }

    // Mostrar el formulario para crear un nuevo producto
    public function create()
    {
        //
    }

    // Guardar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required|string|max:255',
            'Descripcion' => 'required|string',
            'Precio' => 'required|numeric',
            'Imagen' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product = Product::create([
            'Nombre' => $request->Nombre,
            'Descripcion' => $request->Descripcion,
            'Precio' => $request->Precio,
            'Imagen' => $request->Imagen,
        ]);

        return response()->json($product, 201);
    }

    // Mostrar un producto específico
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return response()->json($product);
    }

    // Mostrar el formulario para editar un producto existente
    public function edit($id)
    {
        //
    }

    // Actualizar un producto específico en la base de datos
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'Nombre' => 'string|max:255',
            'Descripcion' => 'string',
            'Precio' => 'numeric',
            'Imagen' => 'string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $product->update($request->all());

        return response()->json($product);
    }

    // Eliminar un producto específico de la base de datos
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->delete();

        return response()->json(['message' => 'Producto eliminado con éxito']);
    }
}
