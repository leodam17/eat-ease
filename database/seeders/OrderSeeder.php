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
            // User 1: 2 orders
            [
                'user_id' => 1,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 1,
                'nama_pesanan' => 'Iced Tea',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 2: 3 orders
            [
                'user_id' => 2,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 2,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 3: 1 order
            [
                'user_id' => 3,
                'nama_pesanan' => 'Beef Steak',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 4: 4 orders
            [
                'user_id' => 4,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'nama_pesanan' => 'Hazelnut Coffee',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'nama_pesanan' => 'Coconut Water',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 5: 5 orders
            [
                'user_id' => 5,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 5,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 6: 3 orders
            [
                'user_id' => 6,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 6,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 7: 2 orders
            [
                'user_id' => 7,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 7,
                'nama_pesanan' => 'Hazelnut Coffee',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 8: 4 orders
            [
                'user_id' => 8,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'nama_pesanan' => 'Beef Steak',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 8,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 9: 5 orders
            [
                'user_id' => 9,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'nama_pesanan' => 'Beef Steak',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 9,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 10: 1 order
            [
                'user_id' => 10,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 11: 3 orders
            [
                'user_id' => 11,
                'nama_pesanan' => 'Milkshake',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 11,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 11,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // User 12: 4 orders
            [
                'user_id' => 12,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 12,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 13: 2 orders
            [
                'user_id' => 13,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 13,
                'nama_pesanan' => 'Hazelnut Coffee',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 14: 1 order
            [
                'user_id' => 14,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 15: 3 orders
            [
                'user_id' => 15,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 15,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 15,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 16: 4 orders
            [
                'user_id' => 16,
                'nama_pesanan' => 'Beef Steak',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 16,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 16,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 16,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 17: 2 orders
            [
                'user_id' => 17,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 17,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 18: 3 orders
            [
                'user_id' => 18,
                'nama_pesanan' => 'Almond Milk Latte',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 18,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 18,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 19: 5 orders
            [
                'user_id' => 19,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 19,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 19,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 19,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 19,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 20: 4 orders
            [
                'user_id' => 20,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 20,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 20,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 20,
                'nama_pesanan' => 'Tofu Salad',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 21: 3 orders
            [
                'user_id' => 21,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 21,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 21,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 22: 2 orders
            [
                'user_id' => 22,
                'nama_pesanan' => 'Almond Milk Latte',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 22,
                'nama_pesanan' => 'Hazelnut Coffee',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 23: 3 orders
            [
                'user_id' => 23,
                'nama_pesanan' => 'Vegan Burger',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 23,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 23,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 24: 4 orders
            [
                'user_id' => 24,
                'nama_pesanan' => 'Vegetable Stir Fry',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 24,
                'nama_pesanan' => 'Beef Steak',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 24,
                'nama_pesanan' => 'Spaghetti Bolognese',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 24,
                'nama_pesanan' => 'Green Detox Juice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // User 25: 2 orders
            [
                'user_id' => 25,
                'nama_pesanan' => 'Grilled Chicken',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 25,
                'nama_pesanan' => 'Fried Rice',
                'status_pesanan' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
