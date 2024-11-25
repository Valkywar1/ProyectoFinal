<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    // Mostrar la lista de deseos del usuario
    public function index()
    {
        // Obtener la lista de deseos del usuario autenticado
        $wishlist = Wishlist::where('user_id', Auth::id())->get();

        // Pasar los productos de la lista de deseos a la vista
        return view('wishlist.index', ['wishlist' => $wishlist]);
    }

    // Agregar un producto a la lista de deseos
    public function add(Request $request)
    {
        // Validar el producto que se desea agregar
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        // Verificar si el producto ya está en la lista de deseos del usuario
        $exists = Wishlist::where('user_id', Auth::id())
                          ->where('product_id', $request->product_id)
                          ->exists();

        if ($exists) {
            return redirect()->route('wishlist.index')->with('message', 'Este producto ya está en tu lista de deseos.');
        }

        // Crear una nueva entrada en la tabla de wishlists
        Wishlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->route('wishlist.index')->with('message', 'Producto añadido a la lista de deseos.');
    }

    // Eliminar un producto de la lista de deseos (Soft Delete)
    public function remove($productId)
    {
        // Buscar el producto en la lista de deseos del usuario
        $wishlistItem = Wishlist::where('user_id', Auth::id())
                                ->where('product_id', $productId)
                                ->first();

        // Verificar si el producto existe en la lista de deseos del usuario
        if ($wishlistItem) {
            // Eliminarlo de manera lógica usando Soft Delete
            $wishlistItem->delete();
            return redirect()->route('wishlist.index')->with('message', 'Producto eliminado de la lista de deseos.');
        }

        return redirect()->route('wishlist.index')->with('message', 'Producto no encontrado en tu lista de deseos.');
    }
    
    // Retornar vista
    public function wishlist()
    {
        return view('wishlist');
    }
}
