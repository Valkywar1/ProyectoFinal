<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Especificar la tabla 'productos' en lugar de 'products'
    protected $table = 'productos';

    // Añadir los campos que quieres permitir llenar
    protected $fillable = ['name', 'price', 'description'];
}
