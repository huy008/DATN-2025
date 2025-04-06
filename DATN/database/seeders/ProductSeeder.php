<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $products = [];

        for ($i = 1; $i <= 20; $i++) {
            $imageUrl = $faker->imageUrl(300, 300, 'electronics', true, 'product');

            $products[] = [
                'category_id' => rand(1, 5), // Giả lập có 5 danh mục
                'sku' => 'SKU' . Str::upper(Str::random(6)),
                'img_thumbnail' => $imageUrl, // Lấy ảnh từ mạng
                'type' => rand(0, 1),
                'name' => 'Product ' . $i,
                'short_description' => $faker->sentence(10),
                'description' => $faker->paragraph(3),
                'brand' => 'Brand ' . rand(1, 5),
                'base_price' => rand(100, 1000),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('products')->insert($products);
    }
}
