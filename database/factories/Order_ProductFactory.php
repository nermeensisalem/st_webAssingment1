<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Product::class, function (Faker $faker) {
    return [
        'OrderID'=>\App\Order::all()->random()->id,
        'ProductCode'=>\App\Product::all()->random()->Code,
        'Qty'=>$faker->randomNumber(2),
        'PriceEach'=>$faker->randomNumber(2)
    ];
});
