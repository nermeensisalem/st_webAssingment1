<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Customer::class, function (Faker $faker) {
    return [
        'salesRepEmployeeNum'=>\App\Employee::all()->random()->id,
        'Name' => $faker->name,
        'LastName' => $faker->name,
        'FirstName'=>$faker->name,
        'Phone'=>$faker->phoneNumber,
        'Address1'=>$faker->address,
        'Address2'=>$faker->address,
        'City'=>$faker->city,
        'State'=>$faker->state,
        'PostalCode'=>$faker->postcode,
        'Country'=>$faker->country,
        'CreditLimit'=>$faker->randomNumber(4)
    ];
});
