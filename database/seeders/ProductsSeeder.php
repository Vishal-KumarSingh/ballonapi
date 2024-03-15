<?php

namespace Database\Seeders;

use App\Models\Products;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i++) {
            Products::create([
                'name' => $faker->name,
                'description' => $faker->text,
                'price' => $faker->randomFloat(2, 1, 100),
                'category_id' => $faker->numberBetween(1, 10),
            ]);
        //
    }
}
}
