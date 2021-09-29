<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "Tomatensoep";
        $product->price = 2.25;
        $product->category_id = 1;
        $product->save();

        $product = new Product();
        $product->name = "Biefstuk";
        $product->price = 4.75;
        $product->category_id = 2;
        $product->save();

        $product = new Product();
        $product->name = "Hertog Jan";
        $product->price = 1.25;
        $product->category_id = 6;
        $product->save();
    }
}
