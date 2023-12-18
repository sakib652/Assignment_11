<?php

namespace Database\Seeders;

use App\Models\Sale;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sale::create([
            'product_id' => 1, 
            'quantity_sold' => 5,
            'price_per_unit' => 25.99,
            'total_amount' => 129.95,
        ]);

        Sale::create([
            'product_id' => 2, 
            'quantity_sold' => 3,
            'price_per_unit' => 19.99,
            'total_amount' => 59.97,
        ]);

        Sale::create([
            'product_id' => 3, 
            'quantity_sold' => 15,
            'price_per_unit' => 49.99,
            'total_amount' => 749.85,
        ]);

        Sale::create([
            'product_id' => 4, 
            'quantity_sold' => 10,
            'price_per_unit' => 39.99,
            'total_amount' => 399.9,
        ]);

        Sale::create([
            'product_id' => 7, 
            'quantity_sold' => 10,
            'price_per_unit' => 19.99,
            'total_amount' => 199.9,
        ]);

    }
}
