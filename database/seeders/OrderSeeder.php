<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order')->insert([
            [
                'user_id' => 1,
                'nama_pesanan' => 'Grilled Chicken', // Alice Johnson is allergic to seafood
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'nama_pesanan' => 'Tofu Salad', // Bob Smith is vegan and allergic to peanut
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 3,
                'nama_pesanan' => 'Beef Steak', // Charlie Brown is allergic to shrimp
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'nama_pesanan' => 'Spaghetti Bolognese', // David Clark has no allergies or preferences
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'nama_pesanan' => 'Vegan Burger', // Eva White is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'nama_pesanan' => 'Grilled Chicken', // Frank Harris is allergic to peanut
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'nama_pesanan' => 'Vegan Burger', // Grace Lee is vegan and allergic to tofu
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'nama_pesanan' => 'Hazelnut Coffee', // Henry Scott is allergic to milk
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'nama_pesanan' => 'Vegan Burger', // Isabella Moore is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 10,
                'nama_pesanan' => 'Grilled Chicken', // Jack Taylor is allergic to hazelnut
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 11,
                'nama_pesanan' => 'Peanut Butter Smoothie', // Kathy Wilson is vegan and has no allergies
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'nama_pesanan' => 'Vegan Burger', // Liam Moore is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 13,
                'nama_pesanan' => 'Tofu Salad', // Megan Martinez is vegan and allergic to peanut
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 14,
                'nama_pesanan' => 'Grilled Chicken', // Nina Davis is allergic to shrimp
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 15,
                'nama_pesanan' => 'Fried Rice', // Oliver King is allergic to seafood
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 16,
                'nama_pesanan' => 'Vegetable Stir Fry', // Penny Adams is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 17,
                'nama_pesanan' => 'Green Detox Juice', // Quincy Taylor is allergic to milk
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 18,
                'nama_pesanan' => 'Vegan Burger', // Rachel Brown is vegan and has no allergies
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 19,
                'nama_pesanan' => 'Fried Rice', // Sam Green is allergic to hazelnut
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 20,
                'nama_pesanan' => 'Tofu Salad', // Tina Foster is vegan and allergic to tofu
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 21,
                'nama_pesanan' => 'Grilled Chicken', // Ursula Grant has no allergies or preferences
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 22,
                'nama_pesanan' => 'Milkshake Kacang', // Victor Lee is allergic to peanut
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 23,
                'nama_pesanan' => 'Vegan Burger', // Wendy Harris is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 24,
                'nama_pesanan' => 'Hazelnut Coffee', // Xander Clark is allergic to milk
                'status_pesanan' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 25,
                'nama_pesanan' => 'Vegetable Stir Fry', // Yara Scott is vegan and has no allergies
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
