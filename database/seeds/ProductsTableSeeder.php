<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        foreach (range(1, 7) as $index) {
            App\Product::create([
                'name' => $faker->name,
                'price'=>$faker->buildingNumber,
                'quantity'=>$faker->currencyCode,
                
            ]);
        }
    }
}
