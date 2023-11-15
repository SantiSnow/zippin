<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrdersProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_product')->insert([
            [
                'order_id' => 1,
                'product_id' => 1,
            ],

            [
                'order_id' => 1,
                'product_id' => 2,
            ],

            [
                'order_id' => 1,
                'product_id' => 3,
            ],

            [
                'order_id' => 2,
                'product_id' => 1,
            ],

            [
                'order_id' => 2,
                'product_id' => 3,
            ],

            [
                'order_id' => 3,
                'product_id' => 4,
            ],

            [
                'order_id' => 3,
                'product_id' => 1,
            ],
        ]);
    }
}
