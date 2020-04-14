<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Emergency;
use Faker\Generator as Faker;

$factory->define(Emergency::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->numberBetween(1,600),
        'injury_type'=>$faker->text(100),
        'doctor_id'=>$faker->numberBetween(1,100),

    ];
});
