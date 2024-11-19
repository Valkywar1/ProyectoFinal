<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Eager Loading para cargar el usuario y las listas de deseos relacionadas con el producto
        $products = Product::with(['user', 'wishlists'])->get();
        return view('products.index', compact('products'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
