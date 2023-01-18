<?php

namespace Database\Seeders;
use Faker\Generator as Faker;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $product = new Product;
        $product->title = $faker->randomElement(['Frullatore', 'Televisione']);
        $product->description = $faker->paragraph();
        $product->price = $faker->randomFloat(2, 1, 999.99);
        $product->save();
    }
}
