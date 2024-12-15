<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('admin')->insert([
            [
                'nama' => 'aikolee',
                'password' => Hash::make('aikolee'),
                'email' => 'aikolee@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'aikosachi',
                'password' => Hash::make('aikosachi'),
                'email' => 'aikosachi@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'nadya',
                'password' => Hash::make('nadya'),
                'email' => 'nadya@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'joyce',
                'password' => Hash::make('joyce'),
                'email' => 'joyce@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'adam',
                'password' => Hash::make('adam'),
                'email' => 'adam@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
