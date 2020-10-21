<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        //'Code'=>$faker->randomNumber(3),
        'ProductlineID'=>\App\Productline::all()->random()->ID,
        'Name' => $faker->unique()->word,
        'Scale'=>$faker->randomNumber(1),
        'Vendor'=>$faker->word,
        'PdtDescription'=>$faker->sentence,
        'QtyInStock'=>$faker->randomNumber(2),
        'BuyPrice' => $faker->randomNumber(2),
        'MSRP'=>$faker->word

    ];
});
