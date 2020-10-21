<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Office::class, function (Faker $faker) {
    return [
        'City'=>$faker->city,
        'Phone'=>$faker->phoneNumber,
        'Address1'=>$faker->address,
        'Address2'=>$faker->address,
        'State'=>$faker->state,
        'Country'=>$faker->country,
        'PostalCode'=>$faker->postcode,
        'Territory'=>$faker->country

    ];
});
