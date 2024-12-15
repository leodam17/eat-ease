<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuItems = [
            // makanan mengandung alergi
            [
                'nama' => 'Seafood Pasta',
                'gambar' => 'seafood_pasta.jpg',
                'waktu_pengerjaan' => 30,
                'deskripsi' => 'Pasta dengan campuran seafood segar.',
                'harga' => 150000,
                'kategori' => 'Main Course',
                'popularitas' => 7,
                'kalori' => 600,
            ],
            [
                'nama' => 'Peanut Butter Smoothie',
                'gambar' => 'peanut_butter_smoothie.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Smoothie kaya protein dengan selai kacang.',
                'harga' => 50000,
                'kategori' => 'Beverage',
                'popularitas' => 6,
                'kalori' => 300,
            ],
            [
                'nama' => 'Shrimp Salad',
                'gambar' => 'shrimp_salad.jpg',
                'waktu_pengerjaan' => 20,
                'deskripsi' => 'Salad segar dengan udang bakar dan saus lemon.',
                'harga' => 120000,
                'kategori' => 'Salad',
                'popularitas' => 8,
                'kalori' => 450,
            ],

            // makanan vege/vegan
            [
                'nama' => 'Vegan Burger',
                'gambar' => 'vegan_burger.jpg',
                'waktu_pengerjaan' => 25,
                'deskripsi' => 'Burger dengan patty berbahan nabati.',
                'harga' => 90000,
                'kategori' => 'Main Course',
                'popularitas' => 8,
                'kalori' => 500,
            ],
            [
                'nama' => 'Vegetable Stir Fry',
                'gambar' => 'vegetable_stir_fry.jpg',
                'waktu_pengerjaan' => 20,
                'deskripsi' => 'Tumis sayuran dengan saus spesial.',
                'harga' => 75000,
                'kategori' => 'Main Course',
                'popularitas' => 7,
                'kalori' => 350,
            ],
            [
                'nama' => 'Tofu Salad',
                'gambar' => 'tofu_salad.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Salad segar dengan tahu panggang.',
                'harga' => 80000,
                'kategori' => 'Salad',
                'popularitas' => 6,
                'kalori' => 400,
            ],

            // makanan normal
            [
                'nama' => 'Grilled Chicken',
                'gambar' => 'grilled_chicken.jpg',
                'waktu_pengerjaan' => 25,
                'deskripsi' => 'Ayam panggang dengan bumbu rempah.',
                'harga' => 130000,
                'kategori' => 'Main Course',
                'popularitas' => 9,
                'kalori' => 550,
            ],
            [
                'nama' => 'Beef Steak',
                'gambar' => 'beef_steak.jpg',
                'waktu_pengerjaan' => 35,
                'deskripsi' => 'Steak daging sapi dengan saus lada hitam.',
                'harga' => 200000,
                'kategori' => 'Main Course',
                'popularitas' => 10,
                'kalori' => 700,
            ],
            [
                'nama' => 'Fried Rice',
                'gambar' => 'fried_rice.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Nasi goreng dengan topping ayam dan telur.',
                'harga' => 60000,
                'kategori' => 'Main Course',
                'popularitas' => 8,
                'kalori' => 450,
            ],
            [
                'nama' => 'Spaghetti Bolognese',
                'gambar' => 'spaghetti_bolognese.jpg',
                'waktu_pengerjaan' => 30,
                'deskripsi' => 'Spaghetti dengan saus bolognese klasik.',
                'harga' => 110000,
                'kategori' => 'Main Course',
                'popularitas' => 7,
                'kalori' => 500,
            ],

            // minuman vege/vegan
            [
                'nama' => 'Green Detox Juice',
                'gambar' => 'green_detox_juice.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Jus hijau segar dari sayuran organik.',
                'harga' => 40000,
                'kategori' => 'Beverage',
                'popularitas' => 5,
                'kalori' => 150,
            ],
            [
                'nama' => 'Almond Milk Latte',
                'gambar' => 'almond_milk_latte.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Latte berbasis susu almond organik.',
                'harga' => 45000,
                'kategori' => 'Beverage',
                'popularitas' => 9,
                'kalori' => 120,
            ],

            // minuman alergi
            [
                'nama' => 'Milkshake Kacang',
                'gambar' => 'milkshake_kacang.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Milkshake kacang lezat yang kaya rasa.',
                'harga' => 50000,
                'kategori' => 'Beverage',
                'popularitas' => 5,
                'kalori' => 300,
            ],
            [
                'nama' => 'Hazelnut Coffee',
                'gambar' => 'hazelnut_coffee.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Kopi dengan sentuhan hazelnut.',
                'harga' => 55000,
                'kategori' => 'Beverage',
                'popularitas' => 7,
                'kalori' => 200,
            ],
            [
                'nama' => 'Es Teh',
                'gambar' => 'es_teh.jpg',
                'waktu_pengerjaan' => 5,
                'deskripsi' => 'Minuman teh dingin yang menyegarkan dengan rasa manis.',
                'harga' => 15000,
                'kategori' => 'Beverage',
                'popularitas' => 7,
                'kalori' => 100,
            ],
            [
                'nama' => 'Air Kelapa',
                'gambar' => 'air_kelapa.jpg',
                'waktu_pengerjaan' => 5,
                'deskripsi' => 'Minuman alami yang menyegarkan dan penuh elektrolit.',
                'harga' => 20000,
                'kategori' => 'Beverage',
                'popularitas' => 6,
                'kalori' => 50,
            ],
        ];

        // untuk menghitung jumlah order
        foreach ($menuItems as $item) {
            $totalOrders = DB::table('order')
                ->where('nama_pesanan', $item['nama'])
                ->where('status_pesanan', true)
                ->count();

            DB::table('menu')->insert([
                'nama' => $item['nama'],
                'gambar' => $item['gambar'],
                'waktu_pengerjaan' => $item['waktu_pengerjaan'],
                'deskripsi' => $item['deskripsi'],
                'harga' => $item['harga'],
                'kategori' => $item['kategori'],
                'popularitas' => $item['popularitas'],
                'kalori' => $item['kalori'],
                'total_pemesanan' => $totalOrders,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
