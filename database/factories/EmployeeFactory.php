<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Employee::class, function (Faker $faker) {
    return [
        'OfficeCode'=>\App\Office::all()->random()->Code,
      //  'reportsTo'=>\App\Employees::all()->random()->id,
        'LastName' => $faker->name,
        'FirstName'=>$faker->name,
        'Extension' => $faker->word,
        'Email'=>$faker->unique()->safeEmail,
        'JobTitle'=>$faker->jobTitle
    ];
});
