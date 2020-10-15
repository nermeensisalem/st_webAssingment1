<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Productlines::class, function (Faker $faker) {
    return [
        'DescInText'=>$faker->sentence,
        'DescInHTML'=>$faker->sentence,
        'Image'=>$faker->image()
    ];
});
