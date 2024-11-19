<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->index();
            $table->string('name');
<<<<<<<< HEAD:database/migrations/2024_10_05_073959_create_teams_table.php
            $table->boolean('personal_team');
========
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('role', ['user', 'admin'])->default('user'); // Rol: user o admin
            $table->rememberToken();
>>>>>>>> fernando:database/migrations/2024_11_14_205502_create_users_table.php
            $table->timestamps();
            $table->softDeletes(); // Añadir esta línea para Soft Deletes
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
