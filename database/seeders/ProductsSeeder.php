<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => "Desktop PC",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
            [
                'name' => "Laptop PC",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
            [
                'name' => "MacBook Pro",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
            [
                'name' => "MacBook Air",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
            [
                'name' => "Asus Rog GPU",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
            [
                'name' => "Asus gaming Laptop",
                'amount' => rand(0, 200),
                'category' => Str::random(20),
            ],
        ]);
    }
}
