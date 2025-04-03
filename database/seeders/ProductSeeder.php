<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run() {
        Product::create([
            'name1' => 'comp',
            'description' => 'compouter shop.',
            'price' => 5500.50,
            'quantity' => 10
        ]);
    }
}

