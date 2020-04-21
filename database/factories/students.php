<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Students;
use Faker\Generator as Faker;

$factory->define(\App\Students::class, function (Faker $faker) {
    return [
        "name"=>$faker->firstName,
        "last name"=>$faker->lastName,
        "graduated"=>$faker->boolean,
        "major"=>$faker->randomElement(["CSC", "Mat", "Bio", "Phi"]),
        "realboys"=>$faker->year
    ];
});
