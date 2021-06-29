<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catagory;
use Faker\Generator as Faker;

$factory->define(Catagory::class, function (Faker $faker) {
    $name = $faker->jobTitle;
    $nameArr = explode(' ',$name);
    $name = trim($nameArr[0]);
    return [
        'name' => $name,
        'slug' => Str::slug($name)
        //
    ];
});
