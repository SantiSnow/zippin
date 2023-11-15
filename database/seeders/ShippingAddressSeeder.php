<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShippingAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('shipping_addresses')->insert([
            [
                'address' => "Maple Street 3311",
                'city' => 'Sacramento',
                'state' => 'California',
                'order_id' => 1,
            ],

            [
                'address' => "John Wick St. 3122",
                'city' => 'Orlando',
                'state' => 'Florida',
                'order_id' => 2,
            ],

            [
                'address' => "Maple Street 9911",
                'city' => 'Sacramento',
                'state' => 'California',
                'order_id' => 3,
            ],
        ]);
    }
}
