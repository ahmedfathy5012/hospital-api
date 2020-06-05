<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient_problem;
use Faker\Generator as Faker;

$factory->define(Patient_problem::class, function (Faker $faker) {
    return [
        'problem_describtion'=>$faker->text(200),
        'patient_id'=>$faker->numberBetween(1,50),
    ];
});
