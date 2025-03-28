<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name'        => 'Điện thoại',
                'description' => 'Các dòng điện thoại mới nhất',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Laptop',
                'description' => 'Các dòng laptop hiện đại',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Phụ kiện',
                'description' => 'Các loại phụ kiện điện tử',
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
