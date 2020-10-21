<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Payment::class, function (Faker $faker) {
    return [
        'CustomerID'=>\App\Customer::all()->random()->id,
        'CheckNum'=>$faker->unique()->randomNumber(2),
        'PaymentDate'=>$faker->dateTime,
        'Amount'=>$faker->randomNumber(3),

    ];
});
