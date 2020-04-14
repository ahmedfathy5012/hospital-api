<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Dead;
use Faker\Generator as Faker;

$factory->define(Dead::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->unique()->numberBetween(1,600),
        'death_date'=>$faker->date(),
        'cause_of_death'=>$faker->text(200),
        'doctor_id'=>$faker->numberBetween(1,100),
    ];
});
