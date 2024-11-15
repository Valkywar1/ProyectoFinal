<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Elimina la línea que especifica la tabla, o cambia 'productos' a 'products'
    protected $table = 'products'; // Puedes también eliminar esta línea si quieres usar el predeterminado

    // Añadir los campos que quieres permitir llenar
    protected $fillable = ['name', 'price', 'description', 'user_id'];
}
