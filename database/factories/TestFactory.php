<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->numberBetween(1,50),
        'date'=>$faker->date(),
        'analyze_result'=>$faker->text(200),
        'doctor_id'=>$faker->numberBetween(10,15),
        'analyze_id'=>$faker->numberBetween(1,20),
    ];
});
