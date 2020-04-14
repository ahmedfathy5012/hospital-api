<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Doctor_problem;
use Faker\Generator as Faker;

$factory->define(Doctor_problem::class, function (Faker $faker) {
    return [
        'doctor_id'=>$faker->numberBetween(1,100),
        'doctor_problem'=>$faker->text(200),

    ];
});
