<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'product_id', 'quantity'];

    /**
     * Relación: Un carrito pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: Un carrito puede tener muchos productos.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
}
