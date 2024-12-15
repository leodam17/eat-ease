<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('riwayat_user')->insert([
            [
                'id_pesanan' => 1,   // Seafood Pasta by User 1
                'id_user' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 2,   // Peanut Butter Smoothie by User 2
                'id_user' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 3,   // Grilled Chicken by User 3
                'id_user' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 4,   // Spaghetti Bolognese by User 4
                'id_user' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 5,   // Beef Steak by User 5
                'id_user' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 6,   // Vegetable Stir Fry by User 6
                'id_user' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 7,   // Tofu Salad by User 7
                'id_user' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 8,   // Es Teh by User 8
                'id_user' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 9,   // Shrimp Salad by User 9
                'id_user' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 10,  // Air Kelapa by User 10
                'id_user' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 11,  // Milkshake Kacang by User 11
                'id_user' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 12,  // Hazelnut Coffee by User 12
                'id_user' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 13,  // Spaghetti Bolognese by User 13
                'id_user' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 14,  // Beef Steak by User 14
                'id_user' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 15,  // Fried Rice by User 15
                'id_user' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 16,  // Vegan Burger by User 16
                'id_user' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 17,  // Green Detox Juice by User 17
                'id_user' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 18,  // Peanut Butter Smoothie by User 18
                'id_user' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 19,  // Seafood Pasta by User 19
                'id_user' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 20,  // Grilled Chicken by User 20
                'id_user' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 21,  // Milkshake Kacang by User 21
                'id_user' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 22,  // Vegetable Stir Fry by User 22
                'id_user' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 23,  // Spaghetti Bolognese by User 23
                'id_user' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 24,  // Beef Steak by User 24
                'id_user' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pesanan' => 25,  // Shrimp Salad by User 25
                'id_user' => 25,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
