<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('password', 100);
            $table->string('email')->unique();
            $table->string('preferensi', 100)->nullable();
            $table->string('alergi', 100)->nullable();
            $table->string('role', 50)->default('user'); // Menambahkan kolom role
            $table->boolean('is_admin')->default(false); // Menambahkan kolom is_admin
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
