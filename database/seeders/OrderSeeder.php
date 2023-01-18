<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $orders = ['Lorem1', 'Lorem2',];

        foreach ($orders as $order) {
            $newOrder = new Order();
            $newOrder->name = $order;
            $newOrder->slug = Str::slug($newOrder->name);
            $newOrder->number = $faker->randomFloat();
            $newOrder->save();
        }
    }
}
