<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Diagnose;
use Faker\Generator as Faker;

$factory->define(Diagnose::class, function (Faker $faker) {
    return [
        'diagnose'=>$faker->text(200),
        'drugs'=>$faker->text(200),
        'doctor_id'=>$faker->numberBetween(1,100),
        'patient_case_id'=>$faker->numberBetween(1,1000),

    ];
});
