<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wishlist extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'product_id'];

    /**
     * Relación: Una lista de deseos pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación: Un producto en la lista de deseos pertenece a un producto.
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
