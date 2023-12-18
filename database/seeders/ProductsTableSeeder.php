<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Dummy Product 5',
            'price' => 19.99,
            'quantity' => 100,
        ]);

        Product::create([
            'name' => 'Dummy Product 6',
            'price' => 29.99,
            'quantity' => 50,
        ]);

        Product::create([
            'name' => 'Dummy Product 7',
            'price' => 49.99,
            'quantity' => 200,
        ]);

        Product::create([
            'name' => 'Dummy Product 8',
            'price' => 39.99,
            'quantity' => 150,
        ]);

        Product::create([
            'name' => 'Dummy Product 9',
            'price' => 49.99,
            'quantity' => 200,
        ]);

        Product::create([
            'name' => 'Dummy Product 10',
            'price' => 39.99,
            'quantity' => 150,
        ]);
    }
}
