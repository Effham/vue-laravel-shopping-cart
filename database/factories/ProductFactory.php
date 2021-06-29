<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $productSuffix = ['Shirts','Pants','Glasses'];
    $name = $faker->company . ' ' . Arr::random($productSuffix);
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'description' => $faker->realText(50),
        'price' =>$faker->numberBetween(1000,100000)
        //
    ];
});
