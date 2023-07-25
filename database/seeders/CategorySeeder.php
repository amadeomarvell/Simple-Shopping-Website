<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            'category_name' => 'Stationary',
        ]);

        Category::insert([
            'category_name' => 'Sports',
        ]);

        Category::insert([
            'category_name' => 'Jewelry',
        ]);

        Category::insert([
            'category_name' => 'Shoes',
        ]);

        Category::insert([
            'category_name' => 'Clothes',
        ]);

        Category::insert([
            'category_name' => 'Liquor',
        ]);
    }
}
