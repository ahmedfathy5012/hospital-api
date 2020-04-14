<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Operation;
use Faker\Generator as Faker;

$factory->define(Operation::class, function (Faker $faker) {
    return [
        'patient_id'=>$faker->numberBetween(1,600),
        'anesthesiologist_id'=>$faker->numberBetween(1,10),
        'anesthetic_id'=>$faker->numberBetween(1,20),
        'surgeon_id'=>$faker->numberBetween(11,20),
        'date'=>$faker->date(),
        'name'=>$faker->word,
    ];
});
