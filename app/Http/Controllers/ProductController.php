<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Asegúrate de importar el modelo Product

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los productos de la base de datos
        $products = Product::all(); 

        // Retornar la vista 'products.index' y pasarle la lista de productos
        return view('products.index', compact('products')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retornar la vista 'products.create' que contendrá el formulario de creación
        return view('products.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar la entrada del formulario
        $request->validate([
            'name' => 'required|string|max:255|min:2', // El nombre es obligatorio y debe tener como máximo 255 caracteres
            'price' => 'required|numeric', // El precio es obligatorio y debe ser un número
            'description' => 'required', // La descripción debe ser requerida
        ]);

        // Crear un nuevo producto usando los datos del formulario
        Product::create($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar el producto por ID
        $product = Product::findOrFail($id); 

        // Retornar la vista 'products.show' con los datos del producto
        return view('products.show', compact('product')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Buscar el producto por ID
        $product = Product::findOrFail($id); 

        // Retornar la vista 'products.edit' con los datos del producto
        return view('products.edit', compact('product')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validar la entrada del formulario
        $request->validate([
            'name' => 'required|string|max:255|min:2', // El nombre es obligatorio y debe tener como máximo 255 caracteres
            'price' => 'required|numeric', // El precio es obligatorio y debe ser un número
            'description' => 'required', // La descripción debe ser requerida
        ]);

        // Buscar el producto por ID y actualizarlo con los nuevos datos
        $product = Product::findOrFail($id); 
        $product->update($request->all());

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Buscar el producto por ID
        $product = Product::findOrFail($id); 

        // Eliminar el producto
        $product->delete(); 

        // Redirigir a la lista de productos con un mensaje de éxito
        return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito.');
    }

    // Metodo para la vista shop
    public function shop()
    {
        // Obtener los productos de la base de datos
        $products = Product::all();

        // Retornar la vista 'shop' con los productos
        return view('shop', compact('products'));
    }
}
