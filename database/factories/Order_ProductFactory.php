<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Order_Products::class, function (Faker $faker) {
    return [
        'OrderID'=>\App\Orders::all()->random()->id,
        'ProductCode'=>\App\Products::all()->random()->Code,
        'Qty'=>$faker->randomNumber(2),
        'PriceEach'=>$faker->randomNumber(2)
    ];
});
