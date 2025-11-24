<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Wireless Bluetooth Headphones',
                'description' => 'High-quality wireless headphones with noise cancellation and 30-hour battery life.',
                'price' => 149.99,
                'image_url' => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=500'
            ],
            [
                'name' => 'Smart Watch Pro',
                'description' => 'Feature-rich smartwatch with health monitoring, GPS, and water resistance.',
                'price' => 299.99,
                'image_url' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=500'
            ],
            [
                'name' => 'Portable Power Bank',
                'description' => 'Compact 20000mAh power bank with fast charging support for all devices.',
                'price' => 49.99,
                'image_url' => 'https://images.unsplash.com/photo-1609091839311-d5365f9ff1c5?w=500'
            ],
            [
                'name' => 'Mechanical Gaming Keyboard',
                'description' => 'RGB backlit mechanical keyboard with programmable keys for gaming.',
                'price' => 89.99,
                'image_url' => 'https://images.unsplash.com/photo-1511467687858-23d96c32e4ae?w=500'
            ],
            [
                'name' => 'Wireless Mouse',
                'description' => 'Ergonomic wireless mouse with adjustable DPI and long battery life.',
                'price' => 39.99,
                'image_url' => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=500'
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
