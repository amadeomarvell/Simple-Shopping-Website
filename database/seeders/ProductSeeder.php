<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            'product_name' => 'Black Pen',
            'product_price' => 2500,
            'product_desc' => 'kenko',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 5,
            'category_id' => 1,
        ]);

        Product::insert([
            'product_name' => 'Harry Potter Book',
            'product_price' => 100000,
            'product_desc' => 'The Sorcerers Stone',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 5,
            'category_id' => 1,
        ]);

        Product::insert([
            'product_name' => 'Notebook',
            'product_price' => 10000,
            'product_desc' => '15x30cm',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 5,
            'category_id' => 1,
        ]);

        Product::insert([
            'product_name' => 'Blue Running Shoes',
            'product_price' => 80000,
            'product_desc' => 'Blue, size 40-43',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 1,
            'category_id' => 2,
        ]);

        Product::insert([
            'product_name' => 'Baby Shoes',
            'product_price' => 40000,
            'product_desc' => 'light blue',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 4,
        ]);

        Product::insert([
            'product_name' => 'Blue Shirt',
            'product_price' => 50000,
            'product_desc' => 'size S-XL',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 5,
        ]);

        Product::insert([
            'product_name' => 'Basketball',
            'product_price' => 100000,
            'product_desc' => 'Nike',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 1,
            'category_id' => 2,
        ]);

        Product::insert([
            'product_name' => 'Soccer Ball',
            'product_price' => 70000,
            'product_desc' => 'Puma',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 1,
            'category_id' => 2,
        ]);

        Product::insert([
            'product_name' => 'Beer',
            'product_price' => 20000,
            'product_desc' => 'Bintang',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 3,
            'category_id' => 6,
        ]);

        Product::insert([
            'product_name' => 'Brandy',
            'product_price' => 250000,
            'product_desc' => 'Gold Star',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 3,
            'category_id' => 6,
        ]);

        Product::insert([
            'product_name' => 'Whiskey',
            'product_price' => 150000,
            'product_desc' => 'Gold Star',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 3,
            'category_id' => 6,
        ]);

        Product::insert([
            'product_name' => 'Black Casual Shoes',
            'product_price' => 120000,
            'product_desc' => 'Converse',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 4,
            'category_id' => 4,
        ]);

        Product::insert([
            'product_name' => 'Flower Shirt',
            'product_price' => 80000,
            'product_desc' => 'H&M',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 5,
        ]);

        Product::insert([
            'product_name' => 'Green Shirt',
            'product_price' => 80000,
            'product_desc' => 'Uniqlo',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 5,
        ]);

        Product::insert([
            'product_name' => 'Red Dress',
            'product_price' => 160000,
            'product_desc' => '-',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 5,
        ]);

        Product::insert([
            'product_name' => 'Running Shoes',
            'product_price' => 175000,
            'product_desc' => 'Adidas',
            'product_qty' => 0,
            'hot_items_flag' => 1,
            'brand_id' => 1,
            'category_id' => 4,
        ]);

        Product::insert([
            'product_name' => 'Tote Bag',
            'product_price' => 75000,
            'product_desc' => '-',
            'product_qty' => 0,
            'hot_items_flag' => 0,
            'brand_id' => 2,
            'category_id' => 5,
        ]);
    }
}
