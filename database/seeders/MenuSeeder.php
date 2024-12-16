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
            [
                'nama' => 'Seafood Pasta',
                'gambar' => 'seafood_pasta.webp',
                'waktu_pengerjaan' => 30,
                'deskripsi' => 'Pasta with a mix of fresh seafood.',
                'harga' => 150000,
                'kategori' => 'Seafood',
                'popularitas' => 7,
                'kalori' => 600,
            ],
            [
                'nama' => 'Shrimp Salad',
                'gambar' => 'shrimp_salad.jpg',
                'waktu_pengerjaan' => 20,
                'deskripsi' => 'Fresh salad with grilled shrimp and lemon dressing.',
                'harga' => 120000,
                'kategori' => 'Seafood',
                'popularitas' => 8,
                'kalori' => 450,
            ],
            [
                'nama' => 'Vegan Burger',
                'gambar' => 'vegan_burger.jpg',
                'waktu_pengerjaan' => 25,
                'deskripsi' => 'Burger with a plant-based patty.',
                'harga' => 90000,
                'kategori' => 'Vegan',
                'popularitas' => 8,
                'kalori' => 500,
            ],
            [
                'nama' => 'Vegetable Stir Fry',
                'gambar' => 'vegetable_stir_fry.jpg',
                'waktu_pengerjaan' => 20,
                'deskripsi' => 'Stir-fried vegetables with special sauce.',
                'harga' => 75000,
                'kategori' => 'Vegan',
                'popularitas' => 7,
                'kalori' => 350,
            ],
            [
                'nama' => 'Tofu Salad',
                'gambar' => 'tofu_salad.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Fresh salad with grilled tofu.',
                'harga' => 80000,
                'kategori' => 'Vegan',
                'popularitas' => 6,
                'kalori' => 400,
            ],
            [
                'nama' => 'Grilled Chicken',
                'gambar' => 'grilled_chicken.jpg',
                'waktu_pengerjaan' => 25,
                'deskripsi' => 'Grilled chicken with flavorful spices.',
                'harga' => 130000,
                'kategori' => 'Chicken',
                'popularitas' => 9,
                'kalori' => 550,
            ],
            [
                'nama' => 'Beef Steak',
                'gambar' => 'beef_steak.jpg',
                'waktu_pengerjaan' => 35,
                'deskripsi' => 'Beef steak with black pepper sauce.',
                'harga' => 200000,
                'kategori' => 'Normal',
                'popularitas' => 10,
                'kalori' => 700,
            ],
            [
                'nama' => 'Fried Rice',
                'gambar' => 'fried_rice.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Fried rice topped with egg.',
                'harga' => 60000,
                'kategori' => 'Normal',
                'popularitas' => 8,
                'kalori' => 450,
            ],
            [
                'nama' => 'Spaghetti Bolognese',
                'gambar' => 'spaghetti_bolognese.jpg',
                'waktu_pengerjaan' => 30,
                'deskripsi' => 'Spaghetti with classic Bolognese sauce.',
                'harga' => 110000,
                'kategori' => 'Normal',
                'popularitas' => 7,
                'kalori' => 500,
            ],
            [
                'nama' => 'Green Detox Juice',
                'gambar' => 'green_detox_juice.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Refreshing green juice made from organic vegetables.',
                'harga' => 40000,
                'kategori' => 'Vegan',
                'popularitas' => 5,
                'kalori' => 150,
            ],
            [
                'nama' => 'Almond Milk Latte',
                'gambar' => 'almond_milk_latte.jpg',
                'waktu_pengerjaan' => 15,
                'deskripsi' => 'Latte made with organic almond milk.',
                'harga' => 45000,
                'kategori' => 'Vegan',
                'popularitas' => 9,
                'kalori' => 120,
            ],
            [
                'nama' => 'Peanut Butter Milkshake',
                'gambar' => 'peanut_butter_milkshake.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Delicious peanut milkshake rich in flavor.',
                'harga' => 50000,
                'kategori' => 'Peanut',
                'popularitas' => 5,
                'kalori' => 300,
            ],
            [
                'nama' => 'Hazelnut Coffee',
                'gambar' => 'hazelnut_coffee.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'Coffee with a hint of hazelnut.',
                'harga' => 55000,
                'kategori' => 'Hazelnut',
                'popularitas' => 7,
                'kalori' => 200,
            ],
            [
                'nama' => 'Peanut Butter Banana Smoothie',
                'gambar' => 'peanut_butter_banana.jpg',
                'waktu_pengerjaan' => 10,
                'deskripsi' => 'A creamy smoothie with the perfect blend of peanut butter and banana.',
                'harga' => 50000,
                'kategori' => 'Peanut',
                'popularitas' => 6,
                'kalori' => 300,
            ],
            [
                'nama' => 'Iced Tea',
                'gambar' => 'iced_tea.jpg',
                'waktu_pengerjaan' => 5,
                'deskripsi' => 'Refreshing iced tea with a sweet taste.',
                'harga' => 15000,
                'kategori' => 'Normal',
                'popularitas' => 7,
                'kalori' => 100,
            ],
            [
                'nama' => 'Coconut Water',
                'gambar' => 'coconut.jpg',
                'waktu_pengerjaan' => 5,
                'deskripsi' => 'Natural drink rich in electrolytes.',
                'harga' => 20000,
                'kategori' => 'Normal',
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
