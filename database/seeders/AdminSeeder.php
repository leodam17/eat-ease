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
                'nama' => 'Aiko Lee',
                'password' => Hash::make('aikolee'),
                'email' => 'aikolee@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Aiko Sachi',
                'password' => Hash::make('aikosachi'),
                'email' => 'aikosachi@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Nadya',
                'password' => Hash::make('nadyaa'),
                'email' => 'nadya@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Joyce',
                'password' => Hash::make('joycee'),
                'email' => 'joyce@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Adam',
                'password' => Hash::make('leoadam'),
                'email' => 'adam@admin.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
