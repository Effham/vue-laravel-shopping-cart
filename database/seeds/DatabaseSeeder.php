<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Catagory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\Product::class,20)->create();
        $catagories = factory(App\Catagory::class,5)->create();
        // $catagories = factory(App\Catagory::class)->count(5)->make();
        // $products = factory(App\Product::class)->count(20)->make();

        // Product::factory()->count(20)->create();
        // Catagory::factory()->count(20)->create();

        // $catagories= Catagory::all();
        // Product::all()->each(function($product) use ($catagories)
        // {
        //     $product->catagories()->attach(
        //         $catagories->random(2)->pluck('id')->toArray()
        //     );
        // });
        $products->each(function($product) use ($catagories)
        {
            $product->catagories()->attach(
                $catagories->random(2)->pluck('id')->toArray()
            );
        });
        // $this->call(UserSeeder::class);
    }
}
