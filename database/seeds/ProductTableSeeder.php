<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Product::create([
            'name' => 'Product 01',
            'description' => 'Description for product 01',
            'original_price' => 2.5,
            'promotional_price' => 2,
            'stock' => 10,
        ]);

        App\Product::create([
            'name' => 'Product 02',
            'description' => 'Description for product 02',
            'original_price' => 10,
            'stock' => 5,
        ]);

        App\Product::create([
            'name' => 'Product 03',
            'description' => 'Description for product 03',
            'original_price' => 200,
            'promotional_price' => 175.50,
            'stock' => 0,
        ]);

    }
}
