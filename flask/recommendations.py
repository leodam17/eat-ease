from flask import Flask, request, jsonify
import pandas as pd
from sklearn.cluster import KMeans
from sklearn.neighbors import NearestNeighbors
from sklearn.preprocessing import StandardScaler

app = Flask(__name__)

# Load data
menu_df = pd.read_csv('menu.csv')  # Data menu
users_df = pd.read_csv('users.csv')  # Data user
orders_df = pd.read_csv('orders.csv')  # Data pesanan

# Step 1: Preprocess and model setup
orders_df.rename(columns={'user id': 'user_id', 'nama pesanan': 'nama_pesanan'}, inplace=True)

# Preprocess menu data
kategori_map = {category: idx for idx, category in enumerate(menu_df['kategori'].unique())}
menu_df['kategori_encoded'] = menu_df['kategori'].map(kategori_map)
menu_features = menu_df[['kategori_encoded', 'harga', 'kalori']]

# Standardize features
scaler = StandardScaler()
menu_features_scaled = scaler.fit_transform(menu_features)

# Apply KMeans clustering
kmeans = KMeans(n_clusters=3, random_state=42)
menu_df['cluster'] = kmeans.fit_predict(menu_features_scaled)

# Define allergy categories
allergy_categories = {
    'seafood': ['shrimp', 'crab', 'lobster', 'oysters', 'fish', 'squid', 'seafood'],
    'peanut': ['peanut'],
    'chicken': ['chicken'],
    'hazelnut': ['hazelnut', 'nut'],
    'milk': ['milk', 'cheese', 'cream'],
    'tofu': ['tofu'],
}

# KNN for recommendations based on menu features
knn = NearestNeighbors(n_neighbors=5, metric='euclidean')
knn.fit(menu_features_scaled)

# Step 3: Define the recommendation function
def get_recommendations(user_id, user_preference, user_allergy):
    # Prepare user order history
    user_order_history = orders_df.groupby('user_id')['nama_pesanan'].apply(list).to_dict()

    # Filter menus based on preference
    if user_preference == 'vegan':
        compatible_menus = menu_df[menu_df['kategori'] == 'Vegan']
    elif user_preference == 'normal':
        compatible_menus = menu_df[menu_df['kategori'] != 'Vegan']
    else:
        compatible_menus = menu_df

    # Filter out menus based on allergy
    if user_allergy in allergy_categories and user_allergy != 'none':
        allergic_ingredients = allergy_categories[user_allergy]
        compatible_menus = compatible_menus[~compatible_menus['nama'].str.contains('|'.join(allergic_ingredients), case=False, na=False)]

    # Filter menus by cluster and allergy preference
    clustered_menus = menu_df[menu_df['cluster'].isin(compatible_menus['cluster'].unique())]
    clustered_menus = clustered_menus[~clustered_menus['nama'].str.contains('|'.join(allergic_ingredients), case=False, na=False)]

    # KNN recommendations based on order history
    recommended_menu_ids = []

    if user_id in user_order_history:
        ordered_items = user_order_history[user_id]  # Ordered items by the user
        ordered_menus = menu_df[menu_df['nama'].isin(ordered_items)]  # Filter menu based on orders
        ordered_features = scaler.transform(ordered_menus[['kategori_encoded', 'harga', 'kalori']])

        # Run KNN to find similar items (based on order history)
        distances, indices = knn.kneighbors(ordered_features, n_neighbors=3)
        recommended_menu_ids = menu_df.iloc[indices.flatten()]['id'].tolist()

        # Filter the KNN results based on preferences and allergies
        recommended_menus = menu_df[menu_df['id'].isin(recommended_menu_ids)]
        recommended_menus = recommended_menus[recommended_menus['kategori'].isin(clustered_menus['kategori'])]
        recommended_menus = recommended_menus[~recommended_menus['nama'].str.contains('|'.join(allergic_ingredients), case=False, na=False)]

        # Remove duplicate recommendations
        unique_recommendations = list(set(recommended_menus['id'].tolist()) - set(clustered_menus['id'].tolist()))
        recommendations = unique_recommendations
    else:
        # If no order history, return only preference-based recommendations
        recommendations = clustered_menus.head(3)['id'].tolist()

    return recommendations


# Step 4: Create Flask route to handle recommendation requests
@app.route('/recommend', methods=['POST'])
def recommend():
    try:
        # Get user input from request
        data = request.get_json()
        user_id = data['user_id']
        user_preference = data['preferensi']
        user_allergy = data['alergi']

        # Get recommendations
        recommended_menu_ids = get_recommendations(user_id, user_preference, user_allergy)

        # Return recommendations as JSON
        recommended_menus = menu_df[menu_df['id'].isin(recommended_menu_ids)]
        recommendations = recommended_menus[['id', 'nama']].to_dict(orient='records')

        return jsonify({'recommended_menus': recommendations}), 200
    except Exception as e:
        return jsonify({'error': str(e)}), 400


if __name__ == '__main__':
    app.run(debug=True)
