-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for proyek_aiml
CREATE DATABASE IF NOT EXISTS `proyek_aiml` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `proyek_aiml`;

-- Dumping structure for table proyek_aiml.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `is_admin` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.admin: ~5 rows (approximately)
INSERT INTO `admin` (`id`, `nama`, `password`, `email`, `role`, `is_admin`, `created_at`, `updated_at`) VALUES
	(1, 'Aiko Lee', '$2y$10$zTWa0QgcPOxTJHIRot0uCOKAUeHvOG6oz.mWMDcglcGCOTDpryxFu', 'aikolee@admin.com', 'admin', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(2, 'Aiko Sachi', '$2y$10$Wf2NrsMnk/Uv4rqiz.gcD.zLsdjJqR0sA.k2UcPnFXLagE/bPAdAi', 'aikosachi@admin.com', 'admin', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(3, 'Nadya', '$2y$10$Pv3cBXL6HVUe3N.o3sTQ6eoq3GoXJLQczy/23xvrxna.VARjuc1XC', 'nadya@admin.com', 'admin', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(4, 'Joyce', '$2y$10$g2mTmtvIgbOcQt3ogTXNWuyoY4R3U0J3hqBVXw43.DFLXVgSpj8Gy', 'joyce@admin.com', 'admin', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(5, 'Adam', '$2y$10$sPN/dlUVxR8PanpJh4NhI.4xVUO7b0HCtStCAjnCbwAhX.ls6YDa2', 'adam@admin.com', 'admin', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40');

-- Dumping structure for table proyek_aiml.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table proyek_aiml.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktu_pengerjaan` int NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `popularitas` int NOT NULL,
  `kalori` int NOT NULL,
  `total_pemesanan` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.menu: ~52 rows (approximately)
INSERT INTO `menu` (`id`, `nama`, `gambar`, `waktu_pengerjaan`, `deskripsi`, `harga`, `kategori`, `popularitas`, `kalori`, `total_pemesanan`, `created_at`, `updated_at`) VALUES
	(1, 'Seafood Pasta', 'seafood_pasta.webp', 30, 'Pasta with a mix of fresh seafood.', 150000, 'Seafood', 7, 600, 45, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(2, 'Shrimp Salad', 'shrimp_salad.jpg', 20, 'Fresh salad with grilled shrimp and lemon.', 120000, 'Seafood', 8, 450, 36, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(3, 'Vegan Burger', 'vegan_burger.jpg', 25, 'Burger with a plant-based patty.', 90000, 'Vegan', 8, 500, 52, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(4, 'Vegetable Stir Fry', 'vegetable_stir_fry.jpg', 20, 'Stir-fried vegetables with special sauce.', 75000, 'Vegan', 7, 350, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(5, 'Tofu Salad', 'tofu_salad.jpg', 15, 'Fresh salad with grilled tofu.', 80000, 'Vegan', 6, 400, 41, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(6, 'Grilled Chicken', 'grilled_chicken.jpg', 25, 'Grilled chicken with flavorful spices.', 130000, 'Chicken', 9, 550, 75, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(7, 'Beef Steak', 'beef_steak.jpg', 35, 'Beef steak with black pepper sauce.', 200000, 'Normal', 10, 700, 33, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(8, 'Fried Rice', 'fried_rice.jpg', 15, 'Fried rice topped with egg.', 60000, 'Normal', 8, 450, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(9, 'Spaghetti Bolognese', 'spaghetti_bolognese.jpg', 30, 'Spaghetti with classic Bolognese sauce.', 110000, 'Normal', 7, 500, 42, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(10, 'Green Detox Juice', 'green_detox_juice.jpg', 10, 'Refreshing juice made from organic vegetables.', 40000, 'Vegan', 5, 150, 28, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(11, 'Almond Milk Latte', 'almond_milk.webp', 15, 'Latte made with organic almond milk.', 45000, 'Vegan', 9, 120, 68, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(12, 'Peanut Butter Milkshake', 'peanut_butter_milkshake.jpg', 10, 'Delicious peanut milkshake rich in flavor.', 50000, 'Peanut', 5, 300, 49, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(13, 'Hazelnut Coffee', 'hazelnut_coffee.jpg', 10, 'Coffee with a hint of hazelnut.', 55000, 'Hazelnut', 7, 200, 41, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(14, 'Peanut Butter Banana Smoothie', 'banana_smoothie.jpg', 10, 'The perfect blend of peanut butter and banana.', 50000, 'Peanut', 6, 300, 57, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(15, 'Iced Tea', 'iced_tea.jpeg', 5, 'Refreshing iced tea with a sweet taste.', 15000, 'Normal', 7, 100, 63, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(16, 'Coconut Water', 'coconut.jpg', 5, 'Natural drink rich in electrolytes.', 20000, 'Normal', 6, 50, 55, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(17, 'Spicy Ramen', 'spicy_ramen.jpg', 20, 'A spicy ramen with tender chicken slices.', 120000, 'Spicy', 9, 550, 48, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(18, 'Chocolate Lava Cake', 'chocolate_lava_cake.jpg', 15, 'Warm chocolate cake with a gooey molten center.', 75000, 'Dessert', 8, 450, 30, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(19, 'Grilled Salmon', 'grilled_salmon.jpg', 25, 'Grilled salmon with a lemon butter sauce.', 180000, 'Seafood', 10, 650, 22, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(20, 'Mango Smoothie', 'mango_smoothie.jpg', 10, 'Made with fresh mangoes and almond milk.', 40000, 'Vegan', 7, 200, 50, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(21, 'Spicy Tofu Stir Fry', 'spicy_tofu.jpg', 20, 'Tofu with vegetables in a spicy sauce.', 85000, 'Spicy', 8, 400, 57, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(22, 'Chili Crab', 'chili_crab.jpg', 30, 'Fresh crab cooked in a spicy chili sauce.', 150000, 'Spicy', 10, 400, 35, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(23, 'Vegan Pizza', 'vegan_pizza.webp', 20, 'A delightful plant-based pizza.', 90000, 'Vegan', 4, 450, 40, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(24, 'Vegan Avocado Toast', 'vegan_avocado.jpg', 10, 'A delicious and creamy avocado toast.', 35000, 'Vegan', 4, 300, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(25, 'Bacon Cheeseburger', 'bacon_cheeseburger.jpg', 15, 'Juicy beef patty topped with crispy bacon.', 60000, 'Normal', 7, 800, 45, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(26, 'Spicy Chicken Wings', 'spicy_chicken_wings.jpg', 25, 'Crispy, spicy, and juicy chicken wings.', 55000, 'Spicy', 5, 450, 30, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(27, 'Spicy Shrimp Tacos', 'spicy_shrimp.jpg', 15, 'Grilled shrimp tossed in a spicy seasoning.', 45000, 'Spicy', 4, 400, 29, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(28, 'Mac and Cheese', 'mac_cheese.webp', 25, 'Macaroni pasta served with a creamy cheese.', 60000, 'Normal', 5, 700, 52, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(29, 'Chocolate Milkshake', 'chocolate_milkshake.jpg', 10, 'Topped with whipped cream.', 35000, 'Normal', 4, 600, 20, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(30, 'Vegan Lentil Soup', 'vegan_lentil.jpg', 30, 'A nutritious soup made with lentils.', 35000, 'Vegan', 4, 250, 28, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(31, 'Vegan Tacos', 'vegan_tacos.jpg', 15, 'Soft corn tortillas with seasoned black beans.', 25000, 'Vegan', 5, 300, 35, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(32, 'Spicy Tofu Rice Bowl', 'spicy_tofu_rice.webp', 30, 'Crispy tofu served with steamed rice.', 40000, 'Spicy', 6, 400, 47, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(33, 'Spicy Beef Tacos', 'spicy_beef_tacos.jpeg', 15, 'Soft tacos with spiced ground beef.', 35000, 'Spicy', 7, 450, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(34, 'Spicy Pork Ribs', 'spicy_pork_ribs.jpg', 30, 'With a spicy BBQ sauce.', 65000, 'Spicy', 10, 750, 70, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(35, 'Cold Brew Coffee', 'cold_brew.jpeg', 10, 'A strong coffee brewed cold.', 35000, 'Normal', 8, 50, 100, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(36, 'Lemonade', 'lemonade.jpg', 5, 'A classic lemonade.', 18000, 'Normal', 8, 100, 120, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(37, 'Vegan Buddha Bowl', 'vegan_buddha.jpg', 15, 'A nourishing bowl filled with vegetables.', 45000, 'Vegan', 9, 500, 25, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(38, 'Chicken Alfredo', 'chicken_alfredo.jpg', 25, 'A creamy pasta dish with grilled chicken.', 55000, 'Normal', 8, 700, 65, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(39, 'Cheesecake', 'cheesecake.jpg', 30, 'Creamy and smooth cheesecake.', 60000, 'Dessert', 8, 500, 40, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(40, 'Tiramisu', 'tiramisu.jpg', 40, 'A classic Italian dessert.', 55000, 'Dessert', 7, 550, 30, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(41, 'Apple Pie', 'apple_pie.jpg', 50, 'Flaky crust with cinnamon-spiced apples.', 50000, 'Dessert', 8, 400, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(42, 'Panna Cotta', 'panna_cotta.webp', 40, 'A creamy Italian dessert made with cream.', 45000, 'Dessert', 7, 380, 55, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(43, 'Lemon Sorbet', 'lemon_sorbet.webp', 20, 'A refreshing and tangy frozen dessert.', 40000, 'Dessert', 6, 200, 45, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(44, 'Fruit Tart', 'fruit_tart.jpg', 60, 'A buttery tart crust filled with pastry cream.', 35000, 'Dessert', 8, 380, 50, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(45, 'Chocolate Cake', 'chocolate_cake.jpg', 45, 'With a deep and rich flavor.', 45000, 'Dessert', 8, 350, 32, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(46, 'Apple Cinnamon Cake', 'apple_cinnamon.jpg', 45, 'Made with fresh apples.', 38000, 'Dessert', 7, 300, 30, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(47, 'Vegetarian Caesar Salad', 'vegetarian_caesar_salad.jpg', 20, 'Fresh romaine lettuce.', 35000, 'Vegan', 7, 200, 25, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(48, 'Pasta Carbonara', 'pasta_carbonara.jpg', 35, 'Creamy pasta carbonara with smoked bacon.', 55000, 'Normal', 9, 450, 65, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(49, 'Tom Yum Soup', 'tom_yum_soup.jpg', 25, 'A spicy and sour Thai soup.', 48000, 'Spicy', 8, 250, 35, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(50, 'Classic Margherita Pizza', 'margherita_pizza.jpg', 40, 'Traditional Italian pizza.', 60000, 'Normal', 10, 500, 100, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(51, 'Pumpkin Soup', 'pumpkin_soup.jpg', 30, 'Creamy pumpkin soup with a hint of nutmeg.', 38000, 'Vegan', 8, 150, 30, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(52, 'Sweet and Sour Chicken', 'sweet_sour_chicken.jpg', 35, 'Tender chicken pieces.', 55000, 'Normal', 8, 400, 60, '2025-01-07 01:49:40', '2025-01-07 01:49:40');

-- Dumping structure for table proyek_aiml.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2024_11_23_143634_create_user_table', 1),
	(6, '2024_11_23_144011_create_admin_table', 1),
	(7, '2024_11_23_144245_create_menu_table', 1),
	(8, '2024_11_23_144519_create_order_table', 1),
	(9, '2024_11_23_144840_create_riwayat_user_table', 1),
	(10, '2024_11_23_161503_add_column_jumlah_pesanan_to_menu_table', 1);

-- Dumping structure for table proyek_aiml.order
CREATE TABLE IF NOT EXISTS `order` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `nama_pesanan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_pesanan` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_user_id_foreign` (`user_id`),
  CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.order: ~75 rows (approximately)
INSERT INTO `order` (`id`, `user_id`, `nama_pesanan`, `status_pesanan`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(2, 1, 'Iced Tea', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(3, 2, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(4, 2, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(5, 2, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(6, 3, 'Beef Steak', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(7, 4, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(8, 4, 'Hazelnut Coffee', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(9, 4, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(10, 4, 'Coconut Water', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(11, 5, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(12, 5, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(13, 5, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(14, 5, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(15, 5, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(16, 6, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(17, 6, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(18, 6, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(19, 7, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(20, 7, 'Hazelnut Coffee', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(21, 8, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(22, 8, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(23, 8, 'Beef Steak', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(24, 8, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(25, 9, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(26, 9, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(27, 9, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(28, 9, 'Beef Steak', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(29, 9, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(30, 10, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(31, 11, 'Milkshake', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(32, 11, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(33, 11, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(34, 12, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(35, 12, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(36, 12, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(37, 12, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(38, 13, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(39, 13, 'Hazelnut Coffee', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(40, 14, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(41, 15, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(42, 15, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(43, 15, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(44, 16, 'Beef Steak', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(45, 16, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(46, 16, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(47, 16, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(48, 17, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(49, 17, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(50, 18, 'Almond Milk Latte', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(51, 18, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(52, 18, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(53, 19, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(54, 19, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(55, 19, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(56, 19, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(57, 19, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(58, 20, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(59, 20, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(60, 20, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(61, 20, 'Tofu Salad', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(62, 21, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(63, 21, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(64, 21, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(65, 22, 'Almond Milk Latte', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(66, 22, 'Hazelnut Coffee', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(67, 23, 'Vegan Burger', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(68, 23, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(69, 23, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(70, 24, 'Vegetable Stir Fry', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(71, 24, 'Beef Steak', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(72, 24, 'Spaghetti Bolognese', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(73, 24, 'Green Detox Juice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(74, 25, 'Grilled Chicken', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(75, 25, 'Fried Rice', 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40');

-- Dumping structure for table proyek_aiml.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table proyek_aiml.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table proyek_aiml.riwayat_user
CREATE TABLE IF NOT EXISTS `riwayat_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_pesanan` bigint unsigned NOT NULL,
  `id_user` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `riwayat_user_id_pesanan_foreign` (`id_pesanan`),
  KEY `riwayat_user_id_user_foreign` (`id_user`),
  CONSTRAINT `riwayat_user_id_pesanan_foreign` FOREIGN KEY (`id_pesanan`) REFERENCES `order` (`id`),
  CONSTRAINT `riwayat_user_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.riwayat_user: ~25 rows (approximately)
INSERT INTO `riwayat_user` (`id`, `id_pesanan`, `id_user`, `created_at`, `updated_at`) VALUES
	(1, 1, 1, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(2, 2, 2, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(3, 3, 3, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(4, 4, 4, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(5, 5, 5, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(6, 6, 6, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(7, 7, 7, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(8, 8, 8, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(9, 9, 9, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(10, 10, 10, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(11, 11, 11, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(12, 12, 12, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(13, 13, 13, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(14, 14, 14, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(15, 15, 15, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(16, 16, 16, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(17, 17, 17, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(18, 18, 18, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(19, 19, 19, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(20, 20, 20, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(21, 21, 21, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(22, 22, 22, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(23, 23, 23, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(24, 24, 24, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(25, 25, 25, '2025-01-07 01:49:40', '2025-01-07 01:49:40');

-- Dumping structure for table proyek_aiml.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preferensi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alergi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.user: ~69 rows (approximately)
INSERT INTO `user` (`id`, `nama`, `password`, `email`, `preferensi`, `alergi`, `role`, `is_admin`, `created_at`, `updated_at`) VALUES
	(1, 'Alice Johnson', '$2y$10$7Gsoklz2nAfOuNweZddZOO83Om7/LuEJGitPX/8P7Evz3Cu5SLtNe', 'alicejohnson@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(2, 'Bob Smith', '$2y$10$GGicZBNLKKGGXJ1CqQcQ1eJDQGqd8HwlUlb6yBglWF67SBipjhu6a', 'bobsmith@user.com', 'vegan', 'peanut', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(3, 'Charlie Brown', '$2y$10$9FqwYhLncqEAwsYdVXmZKO940pwd8MflYk.J28FYy.zigU2s4SJOm', 'charliebrown@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(4, 'David Clark', '$2y$10$cDDeF7BuaeTBHu0AUvh.IOUAGj7onWD9AGpUSE8xVlRdfuMVERgse', 'davidclark@user.com', 'normal', 'none', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(5, 'Eva White', '$2y$10$Omk18WBQJDLuVBrHIZ24R.4qH2v/J5zIh3IOj6qkjJeh5eWhKxRES', 'evawhite@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(6, 'Frank Harris', '$2y$10$TVGY7htp8LnH8QJvARPj2OFpn7BhpuyjMo0gMOAgiPms4TFkjkFny', 'frankharris@user.com', 'normal', 'peanut', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(7, 'Grace Lee', '$2y$10$NgSc5rb0HP96MDVtCRUTROyvngQ/rvUlhW/UcmNI6Rp7aKpg9dtHu', 'gracelee@user.com', 'vegan', 'tofu', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(8, 'Henry Scott', '$2y$10$sEbyEWWxZ7FY2AFx9vsQ.OfuhTPNs4t/dnb95oA6m09djlpk.FKSu', 'henryscott@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(9, 'Isabella Moore', '$2y$10$MJnNgofXHZB1ONs3W5ES.OJC1b6lB49VjvgOO.JLb02GKLSbgzrFq', 'isabellamoore@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:36', '2025-01-07 01:49:36'),
	(10, 'Jack Taylor', '$2y$10$7X.x4tBCRQyH.bKgKxJeROaTCley/XWYh..dC9d67OSBc8ZvtitYG', 'jacktaylor@user.com', 'normal', 'hazelnut', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(11, 'Kathy Wilson', '$2y$10$CR5zioKzMxpac8Bnff.i1OU0F4Z4XdiHkRGJMVvlZJ1YQa7ywSJWu', 'kathywilson@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(12, 'Liam Moore', '$2y$10$oj2wDyMLDLr6C2k0TF.T8OJcrYgwHteZPJ8NQqicuSEFX8yMYaT6e', 'liammoore@user.com', 'normal', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(13, 'Megan Martinez', '$2y$10$mPp5n0GMCaY8G0We0XlRLOCAj3fDzKRYtvo0kX76nqdC6tb46poWO', 'meganmartinez@user.com', 'vegan', 'peanut', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(14, 'Nina Davis', '$2y$10$O.C2stwuo4nBMt1Vm5vijeHH4q692V6jecgkEsVDMve3PCz4fVJAC', 'ninadavis@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(15, 'Oliver King', '$2y$10$u4lv9MUGONB428PjHN7sqebxQaEZIyKauS2mtNv6BlnBkLP6.SFgK', 'oliverking@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(16, 'Penny Adams', '$2y$10$Bd1ldpuiSmYlfjHip3cK0eMiODi9nljXnsnO3pHppuLQ9YDcUAkie', 'pennyadams@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(17, 'Quincy Taylor', '$2y$10$lDNnetG8gNFbBU8huU8zr.GqZcF4I/Q7N7xXohNacKlH5eRTIVy6S', 'quincytaylor@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(18, 'Rachel Brown', '$2y$10$eA1CcZxE9easfl2JlcIVaeBInAlBB1QmdAeqEsQEOLd9wCbxvPcDi', 'rachelbrown@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(19, 'Sam Green', '$2y$10$whBWDe70e2SeLsBhl2RMd.aFGh4FMeARK7LwLBFDh4qNhaeeCosmy', 'samgreen@user.com', 'normal', 'hazelnut', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(20, 'Tina Foster', '$2y$10$8uprSY.vjGd0ykg.7LIXmO4kn9VeKNrMHVn4xz8vaeVZ7DGDqGWLa', 'tinafoster@user.com', 'vegan', 'tofu', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(21, 'Ursula Grant', '$2y$10$7T26GqzOAP8Id245gxagbeSm2Un6SuvgxUS/Mx5TKNKv20SywqtDu', 'ursulagrant@user.com', 'normal', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(22, 'Victor Lee', '$2y$10$fpA4Nj32iznwT6DlGIujauae6mpc3ptRaqAlAC5heI2z4bAidADxi', 'victorlee@user.com', 'normal', 'peanut', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(23, 'Wendy Harris', '$2y$10$cfljOqTuSrlUpLnVw.yssO6mX0Iqqm8bH4zAKUUgZnLKkWLs3K/Iu', 'wendyharris@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(24, 'Xander Clark', '$2y$10$nzObVk5cqPotuLCN6wQMIOvLQ7SA54JrdYFH0ybPW/p3cC21Z7rU6', 'xanderclark@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(25, 'Yara Scott', '$2y$10$JDXzeh1NbR6XgVFPTBYzg.rzzupLjj.j5FBLIuw3FovOt8PHmhPPW', 'yarascott@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(26, 'Zara Williams', '$2y$10$GUESVn.KejH2fHmJtsOxGOhbSOcgAgoNMIzGsXz9Qq2IfmB6ie6HW', 'zarawilliams@user.com', 'spicy', 'tofu', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(27, 'Ethan Brown', '$2y$10$sEQru13.jm4Kv2T.X6ac..2SJSXjjqDckw6BsmRvHnENy2slBu6Ba', 'ethanbrown@user.com', 'spicy', 'seafood', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(28, 'Sophia Miller', '$2y$10$cMXBHDtgZIiaPZV0V9BHz.VVEQF1H.RCq7GaPilp5VLiS6jBWAOS2', 'sophiamiller@user.com', 'spicy', 'none', 'user', 0, '2025-01-07 01:49:37', '2025-01-07 01:49:37'),
	(29, 'Anna Green', '$2y$10$zDcWR6au5hppZYwfD0c41.Kv5li5T/o5nU2SgiZx6TT2DmvsUAaFm', 'annagreen@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(30, 'Brian Taylor', '$2y$10$8XVEnrvP/iwxrKJUvtD9Su2I1YvKiX00C/UrEgYDB8fkcqFHuMp7S', 'briantaylor@user.com', 'vegan', 'milk', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(31, 'Chloe White', '$2y$10$kC5kseiJ8vG.AVhu3hWBZur7RUvdAurARF56rqU/Rr9DxWdfNeKqq', 'chloewhite@user.com', 'spicy', 'peanut', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(32, 'Alice Cooper', '$2y$10$VonCp5tRKeDC29q78iISgeFgBbkLgGIs5./.qjRw5H5cZWKqXOM8m', 'alicecooper@user.com', 'vegan', 'peanut', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(33, 'Bob Dylan', '$2y$10$AzVksa3Eyh.4jSe.FJxw2utW/15xcE18kutmAO5IqZewgGaSSoe5i', 'bobdylan@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(34, 'Charlie Daniels', '$2y$10$rS/nLL8ZroyAdtIyR.gXpuJJYcwACxRNt3yu7AnF.Vq8spx6EniJW', 'charliedaniels@user.com', 'spicy', 'none', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(35, 'Diana Smith', '$2y$10$FSho5Gdq4b8fJSgDzIuSduVLqEF.jy6L.wJRiwHKZsvqOKu/a.rk2', 'dianasmith@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(36, 'Eva Gomez', '$2y$10$AUIfnedLnDo.mAuzbrTxxOVTkYAXEVYFI6GvwTEN9CgeEKXNT1cPW', 'evagomez@user.com', 'vegan', 'hazelnut', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(37, 'Liam Neeson', '$2y$10$W07JgAED3fzXWCwHRVFSleEiNKJPsvf.cmLoHW.dkbVFVXHXC4Hly', 'liamneeson@user.com', 'spicy', 'milk', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(38, 'Olivia Brown', '$2y$10$N.DA7DbOoDcreorfgneD5e5qKZARRksceKsHjyNfRrKeUxMnhJn4u', 'oliviabrown@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(39, 'Mason Green', '$2y$10$mjFsLkv58yCE3XO01I52qO/SY.ylYhuaqRmtGgwEKY6NAH009g1MW', 'masongreen@user.com', 'vegan', 'tofu', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(40, 'Natalie King', '$2y$10$sbcYyoe9DBw.xRrDkrGdz.grSCnnQPBRmgjt9KcNujIJht/LT8j9q', 'natalieking@user.com', 'normal', 'none', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(41, 'Oliver James', '$2y$10$WYixFLgFjg2E.7Uv2VyN/.gWfeJNgaI24jnqkAXv80b7ZLuTyXSh.', 'oliverjames@user.com', 'spicy', 'none', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(42, 'Sophia Clark', '$2y$10$8haSrEeGbaJSkvLdom7WUe5gSfNe8ojg7gDABRXsQ0rLD4DEhcj5C', 'sophiaclark@user.com', 'vegan', 'peanut', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(43, 'Jackson Scott', '$2y$10$VEACr6b7.opPaCYPUn6jAesjesPHJ7YH5BvYv6DZn3odItITTQWSG', 'jacksonscott@user.com', 'normal', 'hazelnut', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(44, 'Chloe Harris', '$2y$10$4He58vnRBhl/9Prg9DpwlOlVjOEzVwcfBehGzYpjd0aE6Mhih2a9O', 'chloeharris@user.com', 'spicy', 'seafood', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(45, 'Evan Mitchell', '$2y$10$GaxvnEM5XLiQPXT2yRU2IexAbT74iuT/Ubi84udAhwbLcbXAsvx76', 'evanmitchell@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(46, 'Zoe Thomas', '$2y$10$m3Lo42n7p3m6DxqSPy9RQOzBLicVjQcMtuZJXjgsjlGfQIg.sTdXq', 'zoethomas@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:38', '2025-01-07 01:49:38'),
	(47, 'Lily Adams', '$2y$10$LPifWCkMAj44BQsZt9M6dODI8SWDGm7lf1HkoyRLq1XN00jbWYAmu', 'lilyadams@user.com', 'dessert', 'milk', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(48, 'Mia Robinson', '$2y$10$iw.EkWG02rMaLsA.VZ2iMOx5cj9Gl1mIwlmiQ6z6xvHAtqgGJ5q6a', 'miarobinson@user.com', 'dessert', 'peanut', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(49, 'Oliver Evans', '$2y$10$hFZ8FtRuymo3YQpuCcCzHOAmIESgVb1IOjYpo/Y7Asuy2hzfmCcpi', 'oliverevans@user.com', 'dessert', 'none', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(50, 'Daniel Rivera', '$2y$10$d763N3XrVRHSJJOgP3cEpOzR0xlehSg.hM2rKNcgCOP/lx3bNijhC', 'danielrivera@user.com', 'normal', 'none', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(51, 'Ella Brooks', '$2y$10$IwXAmO/ypvy4JpcFFfIeduOYeFoZQnTe3foDJSWrgF9zm9ebB7Jj6', 'ellabrooks@user.com', 'spicy', 'peanut', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(52, 'Luna Hayes', '$2y$10$MBmI3LKMTD8JkBoWPuzXpe6R4KmA2K0rO1ri2IWLaS0Zj3L.OlPAy', 'lunahayes@user.com', 'vegan', 'seafood', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(53, 'Noah Fisher', '$2y$10$0M3TgfNK0PLSxrVrDUz3p.YtnHK8MbtxXnehAtHLpTWLLJ/HnOXYi', 'noahfisher@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(54, 'Grace Hunter', '$2y$10$9phmkIDKd3CwXENv56u1gedRf1avpXNJum/PDc.Ub/d4EfDUtl2PO', 'gracehunter@user.com', 'dessert', 'tofu', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(55, 'James Turner', '$2y$10$3neCNjbzPmEPUj0IWSDjlemrJmRjkB9QoSZmAKeqct15NHd/9uvgS', 'jamesturner@user.com', 'spicy', 'none', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(56, 'Chloe Perry', '$2y$10$xa2MD3nmQu058ap/k/npLeDu7251b10veDMlpscb9LctGFx7qcX46', 'chloeperry@user.com', 'vegan', 'peanut', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(57, 'Liam Collins', '$2y$10$45aMGRHpyxBfFCLWzqmpGOk0bxUXujxIdLoqcxAizT5GLCYCFL7nu', 'liamcollins@user.com', 'normal', 'seafood', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(58, 'Olivia Bennett', '$2y$10$L/V9Y1JmrSi7R65NX/qh4.gv9fg098s8ZlBfjp8lD5DmFmtnJn7NC', 'oliviabennett@user.com', 'spicy', 'milk', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(59, 'Emily James', '$2y$10$/rMX7przwUMpJrK44CiTDucr3xhkgaZt0lbjjYTmGkgQtxG/Zm2N.', 'emilyjames@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(60, 'Mason Reed', '$2y$10$ZU78eFnLTFOnduiF4ZVGaujejBTLY3qzNHVEVQP2tbtWveUrVv/oO', 'masonreed@user.com', 'normal', 'hazelnut', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(61, 'Sophia Carter', '$2y$10$vl9A9e6BOOqKZWjKfZSnZOELBZmgNrAsyRefAsiiyh4h005naH85W', 'sophiacarter@user.com', 'dessert', 'peanut', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(62, 'Harper Russell', '$2y$10$qnIB6CV9Y2zRhd3ei1wate19c5dpZhWcjCP6IqohuifwqrC81AxEi', 'harperrussell@user.com', 'vegan', 'milk', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(63, 'Ava Morgan', '$2y$10$KKbq6DDckqW7wI8.eULdS.G0VAPNnbwmT7BpZqRWQVTXo3P7ngp72', 'avamorgan@user.com', 'spicy', 'seafood', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(64, 'Benjamin Ortiz', '$2y$10$rjj0FDzlSt5u.wTImJpqPeQe2cgjG/r4VVkYTO84fCpsrEXEbNODq', 'benjaminortiz@user.com', 'normal', 'tofu', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(65, 'Isabella Hayes', '$2y$10$FPD0TtcyZtCFv1WxwLVUxuDsRPaQ.D4eeh0socLMJdBo6ciRRnlMy', 'isabellahayes@user.com', 'vegan', 'none', 'user', 0, '2025-01-07 01:49:39', '2025-01-07 01:49:39'),
	(66, 'Daniel Torres', '$2y$10$ooplHS4f5hwc174bSzp0p.7vBtbMAmvlYXXtM8FAs4uqjm4g23YGG', 'danieltorres@user.com', 'normal', 'milk', 'user', 0, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(67, 'Lily Bryant', '$2y$10$vcK3.H3568Fr8AmJC9G73.cOdD./fMa/.r8FXyCgc0g3DXuOHxfXK', 'lilybryant@user.com', 'spicy', 'peanut', 'user', 0, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(68, 'Jacob Evans', '$2y$10$rqbWQgjGin4vsufvev81jO1M.N.x2XZM8DLmi2iYIIm.t/j.AgwaG', 'jacobevans@user.com', 'dessert', 'none', 'user', 0, '2025-01-07 01:49:40', '2025-01-07 01:49:40'),
	(69, 'Victoria Lee', '$2y$10$Wr80DYKXxit/toKQz5GD6OwA7CeeUjXg3sLMWpdhqpZ1TkdF7mNaq', 'victorialee@user.com', 'normal', 'hazelnut', 'user', 0, '2025-01-07 01:49:40', '2025-01-07 01:49:40');

-- Dumping structure for table proyek_aiml.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table proyek_aiml.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
