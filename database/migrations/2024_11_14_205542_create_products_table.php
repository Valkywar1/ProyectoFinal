<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description')->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // Usuario que creó el producto
            $table->timestamps();
            $table->softDeletes(); // Añadir esta línea para habilitar Soft Deletes
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
