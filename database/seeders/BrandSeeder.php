<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::insert([
            'brand_name' => 'Adidis',
            'brand_desc' => 'This is a sports store',
            'brand_address' => 'Jl. Kebon Jeruk no.1',
            'brand_email' => 'Adidis@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);

        Brand::insert([
            'brand_name' => 'High D',
            'brand_desc' => 'This is a clothing store',
            'brand_address' => 'Jl. Jelambar no.1',
            'brand_email' => 'Highd@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);

        Brand::insert([
            'brand_name' => 'Holy Wongs',
            'brand_desc' => 'This is a liquor store',
            'brand_address' => 'Jl. Tanjung Duren no.1',
            'brand_email' => 'Holywongs@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);

        Brand::insert([
            'brand_name' => 'HushHush',
            'brand_desc' => 'This is a shoe store',
            'brand_address' => 'Jl. Puri no.1',
            'brand_email' => 'HushHush@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);

        Brand::insert([
            'brand_name' => 'Maximal',
            'brand_desc' => 'This is a stationary store',
            'brand_address' => 'Jl. Pesanggrahan no.1',
            'brand_email' => 'Maximal@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);

        Brand::insert([
            'brand_name' => 'PanLand',
            'brand_desc' => 'This is a jewelry store',
            'brand_address' => 'Jl. Pluit Raya no.1',
            'brand_email' => 'PanLand@gmail.com',
            'brand_phone' => '021 1234 5678'
        ]);
    }
}
