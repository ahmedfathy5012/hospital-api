<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operation;
use Faker\Generator as Faker;

$factory->define(Operation::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->numberBetween(1,50),
        'anesthesiologist_id'=>$faker->numberBetween(1,3),
        'anesthetic_id'=>$faker->numberBetween(1,20),
        'surgeon_id'=>$faker->numberBetween(4,7),
        'date'=>$faker->date(),
        'name'=>$faker->word,
    ];
});
