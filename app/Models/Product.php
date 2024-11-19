<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    // Añadir los campos que quieres permitir llenar
    protected $fillable = ['name', 'price', 'description', 'user_id'];

    /**
     * Relación: Un producto pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: Un producto puede estar en muchas listas de deseos.
     */
    public function wishlists()
    {
        return $this->belongsToMany(Wishlist::class);
    }
    
}
