<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Orders::class, function (Faker $faker) {
    return [
        'CustomerID'=>\App\Customers::all()->random()->id,
        'OrderDate'=>$faker->dateTime,
        'RequiredDate'=>$faker->dateTime,
        'ShippedDate'=>$faker->dateTime,
        'Status'=>$faker->randomNumber(2),
        'Comments'=>$faker->sentence

    ];
});
