<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Hospital;
use Faker\Generator as Faker;

$factory->define(Hospital::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'number'=>$faker->unique()->numberBetween(1,20),
        'phone'=>$faker->unique()->phoneNumber,
        'specialization_id'=>$faker->numberBetween(1,10),
    ];
});
