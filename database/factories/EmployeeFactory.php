<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employees::class, function (Faker $faker) {
    return [
        'OfficeCode'=>\App\Offices::all()->random()->Code,
      //  'reportsTo'=>\App\Employees::all()->random()->id,
        'LastName' => $faker->name,
        'FirstName'=>$faker->name,
        'Extension' => $faker->word,
        'Email'=>$faker->unique()->safeEmail,
        'JobTitle'=>$faker->jobTitle
    ];
});
