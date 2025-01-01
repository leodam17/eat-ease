<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Clustering\KMeans;
use Phpml\Math\Distance\Euclidean;
use Phpml\Preprocessing\Normalizer;

class RecommendationController extends Controller
{
    public function recommend($userId)
    {
        // Step 1: Fetch data from database
        $menu_data = \DB::table('menu')->get();
        $users_data = \DB::table('user')->get()->toArray();

        // Hardcoded user login for now
        $loggedInUser = collect($users_data)->firstWhere('id', $userId);
        if (!$loggedInUser) {
            return response()->json(['error' => 'User not found'], 404);
        }

        // Step 2: Preprocess Menu Data
        // Encode 'kategori' to numerical values
        $kategori_map = [];
        foreach ($menu_data as $menu) {
            if (!isset($kategori_map[$menu->kategori])) {
                $kategori_map[$menu->kategori] = count($kategori_map);
            }
            $menu->kategori_encoded = $kategori_map[$menu->kategori];
        }

        // Features for clustering: 'kategori_encoded', 'harga', 'kalori'
        $menu_features = [];
        foreach ($menu_data as $menu) {
            if (isset($menu->kategori_encoded, $menu->harga, $menu->kalori)) {
                $menu_features[] = [
                    $menu->kategori_encoded,
                    (float)$menu->harga,
                    (float)$menu->kalori,
                ];
            }
        }

        // Step 3: Standardize Features for KMeans
        $normalizer = new Normalizer(Normalizer::NORM_STD);
        $normalizer->transform($menu_features);

        // Step 4: K-Means Clustering (Optional)
        $kmeans = new KMeans(3); // Example: 3 clusters
        $clusters = $kmeans->cluster($menu_features);
        foreach ($clusters as $cluster_id => $cluster_data) {
            foreach ($cluster_data as $index) {
                if (is_int($index) && isset($menu_data[$index])) {
                    $menu_data[$index]->cluster = $cluster_id;
                }
            }
        }

        // Step 5: Define Allergy Categories
        $allergy_categories = [
            'seafood' => ['shrimp', 'crab', 'lobster', 'oysters', 'fish', 'squid', 'seafood'],
            'peanut' => ['peanut'],
            'chicken' => ['chicken'],
            'hazelnut' => ['hazelnut', 'nut'],
            'milk' => ['milk', 'cheese', 'cream'],
            'tofu' => ['tofu'], // Add tofu allergy category
        ];

        $user_preference = $loggedInUser->preferensi;
        $user_allergy = strtolower($loggedInUser->alergi);

        // Step 6: Filter menus based on preference and allergy
        $compatible_menus = array_filter($menu_data->toArray(), function ($menu) use ($user_preference) {
            if ($user_preference === 'vegan' && $menu->kategori !== 'Vegan') {
                return false;
            }
            if ($user_preference === 'normal' && $menu->kategori === 'Vegan') {
                return false;
            }
            return true;
        });

        // Filter menu based on spicy/non-spicy preference
        if ($user_preference === 'spicy') {
            $compatible_menus = array_filter($compatible_menus, function ($menu) {
                return stripos($menu->nama, 'spicy') !== false || stripos($menu->kategori, 'spicy') !== false;
            });
        } elseif ($user_preference === 'non-spicy') {
            $compatible_menus = array_filter($compatible_menus, function ($menu) {
                return stripos($menu->nama, 'spicy') === false && stripos($menu->kategori, 'spicy') === false;
            });
        }

        // Filter menu based on allergies
        if (isset($allergy_categories[$user_allergy]) && $user_allergy !== 'none') {
            $allergic_ingredients = $allergy_categories[$user_allergy];
            $compatible_menus = array_filter($compatible_menus, function ($menu) use ($allergic_ingredients) {
                foreach ($allergic_ingredients as $ingredient) {
                    if (stripos($menu->nama, $ingredient) !== false) {
                        return false;
                    }
                }
                return true;
            });
        }

        // Step 7: Get top recommendations
        // We will just return the top 5 compatible menus
        $recommendations_by_preferences = array_slice(array_column($compatible_menus, 'id'), 0, 5);

        // Return recommendations view
        return view('user.recommendation', [
            'user' => $loggedInUser->nama,
            'menus' => $menu_data,
            'recommendations_by_preferences' => $recommendations_by_preferences,
        ]);
    }
}
