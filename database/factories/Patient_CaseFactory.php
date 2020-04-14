<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patient_Case;
use Faker\Generator as Faker;

$factory->define(Patient_Case::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->numberBetween(1,600),
        'entry_date'=>$faker->date(),
        'exit_date'=>$faker->date(),
    ];
});
