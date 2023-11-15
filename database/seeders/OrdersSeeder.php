<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('orders')->insert([
            [
                'name' => "Matias",
                'address' => "Sunny Side St. 3311",
                'city' => Str::random(20),
                'state' => Str::random(20),
                'payment_method' => rand(1, 3),
                'approved' => rand(1, 2),
            ],
            [
                'name' => "Carlos",
                'address' => "Ocean View 41212",
                'city' => Str::random(20),
                'state' => Str::random(20),
                'payment_method' => rand(1, 3),
                'approved' => rand(1, 2),
            ],
            [
                'name' => "Micaela",
                'address' => "Blvd. del Sol 5122",
                'city' => Str::random(20),
                'state' => Str::random(20),
                'payment_method' => rand(1, 3),
                'approved' => rand(1, 2),
            ],
        ]);
    }
}
