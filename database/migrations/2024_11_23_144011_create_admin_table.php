<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('password', 100);
            $table->string('email')->unique();
            $table->string('role', 50)->default('admin'); // Menambahkan kolom role
            $table->boolean('is_admin')->default(true); // Menambahkan kolom is_admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
